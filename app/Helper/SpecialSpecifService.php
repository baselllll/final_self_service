<?php

namespace App\Helper;

use App\Enums\AppKeysProps;
use App\Http\Repository\MainOracleQueryRepo;
use App\Http\Services\DetailsEmployeeService;

class SpecialSpecifService
{
    protected $collect_services = [];

    public function __construct(DetailsEmployeeService $detailsEmployeeService=null)
    {
        $this->detailsEmployeeService = $detailsEmployeeService;
    }

    public function SpecialService()
    {
        return ['Bonus','Employment Certificate','Loan Request','Medical Insurance','Overtime Payment','Tickets Request','Employee Evaluation','Test_12345'];
    }

    public function mainAdditionalFiledsAvailableService($name){
        $ReservedAdditinalTypeAvailable = ['ANNUAL','EMERGENCY','UNAUTHOUNPA'];
        $attribute_category = null;
        $additional_field = null;;
        foreach ($ReservedAdditinalTypeAvailable as $AvailableType){
            if (\Str::contains($name, $AvailableType,true)) {
                $additional_field = $this->detailsEmployeeService->GetAdditionalFieldForAbsence($AvailableType);
                array_shift($additional_field);
                $attribute_category=$AvailableType;
            }
        }
        return [$attribute_category,$additional_field];
    }


    public function CallingReservedImages(){
        return   [
            "1061"=>'emergency.jpg',
            "62"=>'Annual Leave.jpg',
            "64"=>'baby.jpg',
            "66"=>'exist.jpg',
            "67"=>'haji.png',
            "68"=>'marige.png',
            "70"=>'Sick Leave.jpg',
            "2066"=>'Permission Work.png',
            "2068"=>'Personal Permission.jpg',
            "2064"=>'death idah.jpg',
            "2063"=>'death.jpg',
            "2065"=>'omoma.jpg',
        ];
    }

    public function ExecptThatLeaves(){
        return ['Tickets Adults', 'Delay - Partial Unpaid Leave', 'Absence', 'Ajmi Late Deduction', 'AJMI Casual Leave', 'Tickets Childs', 'Tickets Infants', 'Compassionate Leave', 'Authorized Unpaid Leave'];
    }

    public function GetAllServiceDifferent(){
        return  [
            'Absence_Services'=>['id'=>'AS5','name'=>"Absence Services","image"=>"absence_service.png",'condition'=>''],
            'EOS'=>['id'=>'EOS','name'=>"EOS","image"=>"EOS.jpg",'condition'=>''],
            'Certificate_Services'=>['id'=>'CS6','name'=>"Certificate Services","image"=>"certificate_service.png",'condition'=>'disabled'],
            'LoanServices'=>['id'=>'Lo7','name'=>"Loan Services","image"=>"loan.jpg",'condition'=>'disabled'],
            'Letter Services'=>['id'=>'LS8','name'=>"Letter Services","image"=>"letter.png",'condition'=>'disabled'],
            'Insurance'=>['id'=>'I9','name'=>"Insurance","image"=>"insurance.jpg",'condition'=>'disabled'],
            'Other'=>['id'=>'Other10','name'=>"Other","image"=>"other.png",'condition'=>'disabled'],

        ];
    }
    public function GetAllPendingDifferent(){
        return  [
            'Pending_Absence_Services'=>['id'=>'serv_p_1','name'=>"Absence Pending Services","image"=>"abcence_pending.jpg",'condition'=>'disabled','status_request_pending'=>'absence'],
            'Pending_Eos_Services'=>['id'=>'serv_p_2','name'=>"Eos Pending Services","image"=>"eos_pending.jpg",'condition'=>'disabled','status_request_pending'=>'eos'],
        ];
    }

    public function GetPlatformServices($services_elgiable){
        return $services_elgiable;
    }
    public function checkOverlap($start_date_parameter,$end_date_parameter){
        //get exist less that start of new transaction
        $get_that_transaction_case = \DB::table('xxajmi_notif')
            ->where('absence_end_date','>=',$start_date_parameter)
            ->where(function ($q){
                 $q->when(\DB::raw('no_of_approvals = 3'), function ($q1) {
                   return $q1->where('approval_status', '=', AppKeysProps::Pend_approved_pending_req()->value)
                        ->orWhere('approval_status', '=', AppKeysProps::TopManger_Approved()->value);
                });
                 $q->when(\DB::raw('no_of_approvals = 2'), function ($q2) {
                    return $q2->where('approval_status', '=', AppKeysProps::Pend_approved_pending_req()->value)
                        ->orWhere('approval_status', '=', AppKeysProps::AdminMgrApproved()->value);
                });
                 return $q;

            })
            ->orderByDesc('creation_date')
            ->first();
        //get any exist transaction less than end of new
        $get_that_transaction_2_case = \DB::table('xxajmi_notif')
            ->where('absence_start_date','<=',$end_date_parameter)
            ->where(function ($q){
                $q->when(\DB::raw('no_of_approvals = 3'), function ($q1) {
                    return $q1->where('approval_status', '=', AppKeysProps::Pend_approved_pending_req()->value)
                        ->orWhere('approval_status', '=', AppKeysProps::TopManger_Approved()->value);
                });
                $q->when(\DB::raw('no_of_approvals = 2'), function ($q2) {
                    return $q2->where('approval_status', '=', AppKeysProps::Pend_approved_pending_req()->value)
                        ->orWhere('approval_status', '=', AppKeysProps::AdminMgrApproved()->value);
                });
                return $q;

            })
            ->orderByDesc('creation_date')
            ->first();

        if(isset($get_that_transaction_case) and isset($get_that_transaction_2_case)){
            if($start_date_parameter >=  $get_that_transaction_case->absence_start_date and
                $end_date_parameter <=  $get_that_transaction_2_case->absence_end_date
            ){
                return 'overlapped';
            }else{
                return 'not_overlapped';
            }
        }else{
            return 'not_overlapped';
        }
    }

    public function create_absence_in_oracle(){
        $repo = new MainOracleQueryRepo();
        $employeeNumbers = [
            26253
        ];

        $upload = new \App\Helper\UploadDocumnetAcrchive();
        $records = \DB::table('xxajmi_notif')
//            ->where('abs_ins_status', 'Y')
            ->where('SERVICE_TYPE', 'absence')
            ->where('APPROVAL_STATUS', 'Approved')
            ->where('ABSENCE_TYPE', 'Emergency Leave')
            ->whereIn('empno',$employeeNumbers)
            ->whereBetween('absence_start_date', ['2023-11-21', '2023-11-30'])
            ->get();










        $chunkSize = 200;
        foreach ($records->chunk($chunkSize) as $recordChunk) {
            foreach ($recordChunk as $record) {
                $repo->XjmRecordProcess_manully($record->transaction_id, null);
            }
        }
//        $repo->XjmRecordProcess_manully($record->transaction_id, null);
     }

     public function upload_documents_and_create(){
         $sms = new \App\Helper\SmsVerifyHelper();
         $records = \DB::table("xxajmi_notif")
             ->select('approval_status','no_of_approvals','transaction_id','empno','archive_status','absence_type')
             ->where('no_of_approvals','3')
             ->where('absence_type','Annual Leave')
             ->where('approval_status','Approved')
//              ->where('archive_status',0)

//             ->WhereIn('empno',['9718','23585','34578'])
             ->orderBy('creation_date')
             ->chunk(200, function($recordsChunk) use ($sms) {
                 foreach ($recordsChunk as $record) {
                     $sms->EditOnTemplate($record->transaction_id);
                     \DB::statement("UPDATE xxajmi_notif
                  SET archive_status='1'
                WHERE transaction_id = $record->transaction_id");
                 }
             });
     }

}
