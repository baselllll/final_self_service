<?php

namespace App\Http\Controllers\FrontControllers;

use App\Enums\AppKeysProps;
use App\Helper\EosDetails;
use App\Helper\SmsVerifyHelper;
use App\Helper\SpecialSpecifService;
use App\Http\Controllers\BackEndControllers\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Services\DetailsEmployeeService;
use App\Http\Services\LoginService;
use App\Http\Services\MangerLogicService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileEmployeeController extends Controller
{
    protected $loginService;
    protected $specialSpecifhelper;
    protected $detailsEmployeeService;
    protected $muslimReligion;
    protected $Manger;
    protected $employeeSigniture;

    public function __construct(DetailsEmployeeService $detailsEmployeeService,LoginService $loginService,SpecialSpecifService $specialSpecifhelper,MangerLogicService $mangerLogicService)
    {
        $this->loginService = $loginService;
        $this->specialSpecifhelper = $specialSpecifhelper;
        $this->mangerLogicService = $mangerLogicService;
        $this->detailsEmployeeService = $detailsEmployeeService;
        $this->muslimReligion = AppKeysProps::MuslimReligion();
        $this->employeeSigniture = AppKeysProps::UserTypeEmployee()->value;
        $this->pend_approved_pending_req = AppKeysProps::Pend_approved_pending_req()->value;
        $this->Manger= AppKeysProps::Manger()->value;
    }

    public function pendingService(Request $request){


        $status_request_pending = $request->status_request_pending;
        $requested_notification = json_decode($request->requested_notification);

        $toggle_unauthorized_annual = $request->toggle_unauthorized_annual;
        $special_type_user_default = $request->special_type_user_default;
        $last_requested_to_play_notify = json_decode($request->last_requested_to_play_notify);
        $getAllPendingDifferent =json_decode( $request->getAllPendingDifferent);
        $employee = json_decode($request->employee);
        $all_services = json_decode($request->all_services);
        $absence_requests = json_decode($request->absence_requests);
        $user_type = $request->user_type;
        $specail_services = json_decode($request->specail_services);



        return view('frontend.pending-employee',compact('status_request_pending',
            'requested_notification',
            'toggle_unauthorized_annual',
            'special_type_user_default',
            'last_requested_to_play_notify',
            'getAllPendingDifferent',
            'employee',
            'all_services',
            'absence_requests',
            'user_type',
            'specail_services'));
    }
    public function index(Request $request){


        $user_type =  session()->get('user_type');

        $employee = session()->get('employee');
        $special_type_user_default = session()->get('special_type_user_default');
        $this->loginService->updateOnPerPeople($employee->person_id);
        $getAllPendingDifferent = $this->specialSpecifhelper->GetAllPendingDifferent();
        $status_request = $request->status_request;
        if(!isset($employee)){
            $login_service = App::make(LoginController::class);
            $login_service->logout();
            return redirect()->route("home");
        }
        //static services with static form
        $all_services = $this->loginService->GetAbsenceAttendaceTypeID();
        $specail_services = $this->loginService->GetALLDynamicformTemplate();
        $array_special = $this->specialSpecifhelper->SpecialService();
        $absence_requests= $this->loginService->GetAbsenceManagment($employee->person_id,$employee->employee_number);

        foreach ($absence_requests as $absence){
            if(isset($absence->replacement_person_id)){
                $absence->replacement_person_id =  $this->loginService->GetEmolyeeDataFromPersonId($absence->replacement_person_id)->full_name;
            }
        }




        $updated_specail_services = [];
        foreach ($specail_services as $item){
            if(in_array($item->id_flex_structure_name,$array_special)){
                array_push($updated_specail_services,$item);
            }
        }
        $specail_services = $updated_specail_services;


        if($user_type!==$this->employeeSigniture){
            $requested_notification =  $this->mangerLogicService->GetnotificationOfManger($employee->person_id,$employee->employee_number);
        }else{
            $requested_notification =  $this->mangerLogicService->GetnotificationOfEmployee($employee->employee_number,$employee->person_id);
        }
        $full_data_user = $this->detailsEmployeeService->GetPersonID($employee->employee_number);
        $images =  $this->specialSpecifhelper->CallingReservedImages();



        // show to user that exist "Authorized Unpaid Leave" founded related "Annual leave"
        foreach ($requested_notification as $requested_notify){
            if($requested_notify->absence_type=="Authorized Unpaid Leave" and $requested_notify->approval_status == $this->pend_approved_pending_req and !isset($_GET['status_request']) and $user_type=='manger' and $requested_notify->taswiath_status == 1){
                Alert::warning('WARNING',__('messages.warning_content_unauthorized'));
            }
        }

        foreach ($all_services as $key => $record) {
            $absence_attendance_type_id = $record->absence_attendance_type_id;
            if (isset($images[$absence_attendance_type_id])) {
                $record->image = $images[$absence_attendance_type_id];
            } else {
                $record->image = null; // Or any default image value you prefer
            }

            $all_services[$key] = $record;
        }
        $searchTerm = 67;
        // check user have muslim or not to out service haji
        if($full_data_user->per_information7 !== $this->muslimReligion->value or is_null($full_data_user->per_information7)){
            foreach ($all_services as $key => $absence) {
                if ($absence->absence_attendance_type_id == $searchTerm) {
                    array_splice($all_services, $key, 1);
                    break;
                }
            }
        }

        //eligibal annula
        $status = $this->loginService->checkElgibalityOfAnnul($employee->person_id)->next_vac_start_date;

        if($status=="N"){
            $annual_leave = AppKeysProps::AnnuLeave_absence_type_id()->value;

            $keysToRemove = [];

            foreach ($all_services as $key => $absence) {
                if ($absence->absence_attendance_type_id == $annual_leave ) {
                    $keysToRemove[] = $key;
                }
            }
            foreach ($keysToRemove as $key) {
                unset($all_services[$key]);
            }
            $all_services = array_values($all_services);
        }
        //maragie_leave
        if($full_data_user->marital_status=="S"){
            $child_leave = AppKeysProps::ChildLeave_absence_type_id()->value;

            $keysToRemove = [];

            foreach ($all_services as $key => $absence) {
                if ($absence->absence_attendance_type_id == $child_leave ) {
                    $keysToRemove[] = $key;
                }
            }
            foreach ($keysToRemove as $key) {
                unset($all_services[$key]);
            }
            $all_services = array_values($all_services);
        }

        if($full_data_user->marital_status=="M"){
            $marige_leave = AppKeysProps::MargieLeave_absence_type_id()->value;

            $keysToRemove = [];

            foreach ($all_services as $key => $absence) {

                if ($absence->absence_attendance_type_id == $marige_leave ) {
                    if($absence->last_update_date  < Carbon::now()){
                        $keysToRemove[] = $key;
                    }

                }
            }
            foreach ($keysToRemove as $key) {
                unset($all_services[$key]);
            }
            $all_services = array_values($all_services);
        }

        // show services specific woman employee
        if ($full_data_user->sex =="F"){

        }else{
            $omoma = AppKeysProps::Omoma_absence_type_id()->value;
            $death_idah = AppKeysProps::Idah_absence_type_id()->value;

            $keysToRemove = [];

            foreach ($all_services as $key => $absence) {
                if ($absence->absence_attendance_type_id == $omoma || $absence->absence_attendance_type_id == $death_idah) {
                    $keysToRemove[] = $key;
                }
            }
            foreach ($keysToRemove as $key) {
                unset($all_services[$key]);
            }
            $all_services = array_values($all_services);
        }
        // if manager equal same admin_manger  special case
        foreach ($requested_notification as $key => $item) {


            if ( $item->approval_status== 'Approved' or  ($item->approval_status== 'Admin Mgr Approved' and $item->no_of_approvals=="2" ) or str_contains($item->approval_status,"Rejected")) {
                unset($requested_notification[$key]);
            }

            if ($item->admin_mgr_person_id == $item->mgr_person_id && $special_type_user_default == $this->Manger) {
                $special_type_user_default = $this->Manger;
            } else {
                $user_type = session()->get('user_type');
            }

        }

        $last_requested_to_play_notify =  $requested_notification->first();
        $requested_notification = array_values($requested_notification->toArray());
        $filtered_notification = array_filter($requested_notification, function ($item) {
            return !($item->absence_type == "Annual Leave" && $item->approval_status == "Pending Approval" && $item->taswiath_status != 1) && $item->empno;
        });
        $requested_notification = array_values($filtered_notification);

        $toggle_unauthorized_annual=null;
        foreach ($requested_notification as  $item) {
            if (isset($item->absence_type) && $item->absence_type === "Authorized Unpaid Leave" && $item->approval_status == "Pending Approval" ) {
                $toggle_unauthorized_annual = 1;
            }
        }
        $filtered_notifications = array_filter($requested_notification, function($item) use ($employee) {
            return !($item->mgr_person_id == $employee->person_id && $employee->employee_number == $item->empno);
        });

        $requested_notification = array_values($filtered_notifications);
        $emp_department = $this->loginService->GetReplacmentDetailsSpecificDepartment($employee->person_id);
        return view('frontend.profile-employee',compact('getAllPendingDifferent','emp_department','toggle_unauthorized_annual','special_type_user_default','last_requested_to_play_notify','requested_notification','status_request','user_type','absence_requests','employee','all_services','specail_services'));
    }

    public function update_replacement(Request $request){
         $sms = new SmsVerifyHelper();
        $user_type = session()->get('user_type');
        try {
            $sms->update_replacement($request->rep_transaction_id,$request->replacement_employee_number);
            Alert::success("SUCCESS",__('messages.mr_Approve'));
            return redirect()->route('profile-employee',['user_type'=>$user_type]);
        }catch (\Exception $exception){
            \DB::rollBack();
        }

    }
    public function get_replacements(Request $request){
        $full_data_user = $this->detailsEmployeeService->GetPersonID($request->empno);
        $emp_department = $this->loginService->GetReplacmentDetailsSpecificDepartment($full_data_user->person_id);
        return response()->json(['results' => $emp_department]);
    }

    public function servicesCategory(){
        $user_type =  session()->get('user_type');
        $employee = session()->get('employee');
        if($user_type!=$this->employeeSigniture){
            $requested_notification =  $this->mangerLogicService->GetnotificationOfManger($employee->person_id);
        }else{
            $requested_notification =  $this->mangerLogicService->GetnotificationOfEmployee($employee->employee_number);
        }

        $all_services_category =$this->specialSpecifhelper->GetAllServiceDifferent();

        return view('frontend.services-category',compact('requested_notification','all_services_category'));

    }
    public function certificateService(){}
    public function endService(){
        $eos = new EosDetails();
        $get_eos =  $eos->GetEOSSerivices();
        $get_eos =  json_encode($get_eos);
        $get_eos =  json_decode($get_eos);
        return view('frontend.services-sub_category',compact('get_eos'));
    }
    public function loanService(){
        $loan_services =  $this->mangerLogicService->LoanServices();
        foreach ($loan_services as $item){
            $item->service_type = 'loan service';
        }
        return view('frontend.services-sub_category',compact('loan_services'));
    }
    public function getAttributeSpecialService($flex_id,$service_type,$main_service_request_sub){
        $employee = session()->get('employee');
        $check_saudia = $this->detailsEmployeeService->checkSudiaOrNot($employee->employee_number)->check_saudia;
        $service_attri = null;
        $eos = new EosDetails();
        if ($service_type=="EOS"){
            $eos =  $eos->GetEOSAttr();
            if($check_saudia=='Y'){
                unset($eos[3]);
            }
            $eos =  json_encode($eos);
            $eos =  json_decode($eos);
            $service_attri = $eos;
        }


        return view('frontend.services-sub_category_attribute',compact('service_attri','check_saudia','service_type','flex_id','main_service_request_sub'));
    }


    public function InsuranceService(){}
    public function OtherService(){}
    public function LetterService(){}

    public function upload_image(Request$request){
        $employee = session()->get('employee');
        $employeeForFile = $employee->employee_number;
        if ($request->hasFile('image')) {
            $file = $request->file("image");
            if ($employeeForFile) {
                $folderPath = "documents/$employeeForFile";

                // Remove existing files starting with "image_profile"
                $existingFiles = glob(public_path("$folderPath/image_profile*"));
                foreach ($existingFiles as $existingFile) {
                    unlink($existingFile);
                }

                // Upload the new file
                $fileName = "image_profile" . "_" . $file->getClientOriginalName();
                $file->move(public_path($folderPath), $fileName);
            }
        }

        Alert::success("SUCCESS",__('messages.Success Uploaded'));
        return redirect()->route('get-employee-information');
    }
}
