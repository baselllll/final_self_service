<?php

namespace App\Http\Controllers\FrontControllers;


use App\Enums\AppKeysProps;
use App\Helper\SmsVerifyHelper;
use App\Http\Controllers\Controller;
use App\Http\Services\LoginService;
use App\Http\Services\MangerLogicService;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $employeeSigniture;
    public function __construct(LoginService $loginService,MangerLogicService $mangerLogicService,SmsVerifyHelper $sms=null)
    {
        $this->loginService = $loginService;
        $this->mangerLogicService = $mangerLogicService;
        $this->employeeSigniture = AppKeysProps::UserTypeEmployee()->value;
        $this->sms = $sms;
    }

    public function index(){
        $employee = session()->get('employee');
        $user_type =  session()->get('user_type');
        // check if employee not have supervisor show message and disabled newRequest (item)
        $is_user_supervisor= $this->loginService->GetCountSupervisor($employee->employee_number);
        if(isset($is_user_supervisor)){
            if ($is_user_supervisor->assigned_supvsr_status != "Y"){
                Session::put('employee_not_assign',  true);
                request()->session()->save();
            }
        }
        if(isset($employee)){
            // get all requested services
            $absence_requests= $this->loginService->GetAbsenceManagment($employee->employee_number,$employee->person_id,$user_type);
            foreach ($absence_requests as $absence){
                // get the replacement name
                $replacement_no = $this->loginService->getRecordOfHRTransactionStep($absence->transaction_id);
                if(isset($replacement_no->information10)){
                    $absence->replacement_no =  $this->loginService->GetEmolyeeDataFromPersonId($replacement_no->information10)->full_name;
                }
            }
            // specific notification
            if($user_type!=$this->employeeSigniture){
                $requested_notification =  $this->mangerLogicService->GetnotificationOfManger($employee->person_id);
            }else{
                $requested_notification =  $this->mangerLogicService->GetnotificationOfEmployee($employee->employee_number);

            }
            $last_requested_to_play_notify =  $requested_notification->first();

            return view('frontend.home',compact('user_type','last_requested_to_play_notify','absence_requests','requested_notification'));
        }else{
            return redirect('login');
        }
    }
    public function getDetails($transaction_id){
        $employee = session()->get('employee');
        $user_type =  session()->get('user_type');
        $custom_details_employee = $this->loginService->GetDetailsOfCustom($transaction_id);
        if(isset($custom_details_employee->replacement_no)){
            $custom_details_employee->emno = $this->loginService->GetEmolyeeDataFromPersonId($custom_details_employee->replacement_no)->employee_number;
        }
        if($user_type!=$this->employeeSigniture){
            $requested_notification =  $this->mangerLogicService->GetnotificationOfManger($employee->person_id);
        }else{
            $requested_notification =  $this->mangerLogicService->GetnotificationOfEmployee($employee->employee_number);
        }
        $directory = public_path('documents');

        $files = glob("$directory/*");
        $filePath=null;
        foreach ($files as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            if ($fileName === $custom_details_employee->empno) {
                $empno = $custom_details_employee->empno;
                $segments = explode('/', $file);
                $segments[1] = $empno;
                $newUrl = implode('/', $segments);
                $filePath = str_replace(public_path(), '', $newUrl);
                break;
            }
        }
        $emp_department = $this->loginService->GetReplacmentDetailsSpecificDepartment($employee->person_id);
        return view('frontend.employee-details-transacation',compact('emp_department','requested_notification','filePath','custom_details_employee'));
    }
    public function help(){
        $employee = session()->get('employee');
        $user_type =  session()->get('user_type');
        if($user_type!=$this->employeeSigniture){
            $requested_notification =  $this->mangerLogicService->GetnotificationOfManger($employee->person_id);
        }else{
            $requested_notification =  $this->mangerLogicService->GetnotificationOfEmployee($employee->employee_number);
        }
        return view('frontend.help',compact('requested_notification'));
    }

    public function taswaya(){
        $absence_requests= $this->loginService->GetAnnualServiceForTawsaya();
        return view('frontend.taswaya',compact('absence_requests'));
    }
    public function gawazat(){
        $absence_requests= $this->loginService->GetServiceForGawazat();
        return view('frontend.gawazat',compact('absence_requests'));
    }
    public function Approvetaswaya(Request $request){
        $transaction_id = $request->transaction_id;
        $note = $request->note;
        $this->loginService->taswaya_status_change($transaction_id,$note,'approve');
        Alert::warning('SUCCESS',__('messages.update_success'));
        return back();
    }
    public function Rejecttaswaya(Request $request){
        $transaction_id = $request->transaction_id;
        $note = $request->note;
        $this->loginService->taswaya_status_change($transaction_id,$note,'reject');

        Alert::warning('SUCCESS',__('messages.update_success'));
        return back();
    }
    public function Approvegawazat(Request $request){

        $empno = $request->empno;
        $transaction_id = $request->transaction_id;
        $phone_number = $this->mangerLogicService->GetPhoneEmpFromPersonId($empno)[0]->phone_number;
        $phone_number = $this->sms->filterPhoneNumber($phone_number);
        $this->sms->sendSMS($phone_number,__('messages.gawazat_message').":#".$transaction_id);
        $this->loginService->gawazat_status_change($transaction_id);
        Alert::Success('SUCCESS',__('messages.update_success'));
        return back();
    }
    public function clearance(Request $request){
        $clearance_initialed = $this->loginService->getAnnualApprovedForClearance();

        return view('frontend.clearance',compact("clearance_initialed"));
    }
    public function insertEos(Request $request){
        $eos_record = $this->loginService->GetDetailsOfCustom($request->transaction_id);
        $p_person_id = $this->loginService->GetPersonID($eos_record->empno)->person_id;
        $eos_service = $eos_record->absence_type;
        $transaction_id = $eos_record->transaction_id;
        $actual_date = $eos_record->actual_eos_date;
        $actualTerminationDate = $request->actualTerminationDate;
        $deptRecovery = $request->deptRecovery;
        $noticePeriodExemption = $request->noticePeriodExemption;
        $actual_date = $eos_record->actual_eos_date;
        $this->loginService->EOSiNSERTIONPROCESS($p_person_id,$eos_service,$actual_date,$transaction_id,$actualTerminationDate,$noticePeriodExemption,$deptRecovery);
        Alert::success('SUCCESS',__('messages.mr_Approve'));
        return back();
    }
}
