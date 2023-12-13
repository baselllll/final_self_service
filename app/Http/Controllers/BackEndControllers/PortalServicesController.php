<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Helper\SpecialSpecifService;
use App\Http\Controllers\Controller;

class PortalServicesController extends Controller
{
    public function __construct(SpecialSpecifService $specialSpecifService)
    {
        $this->specialSpecifService =  $specialSpecifService;
    }

    public function index(){
        $user_type =  session()->get('user_type');
        $employee = session()->get('employee');

        // get the eligable service for employee login
        // for me 32250   sshr , clearance
        $services_elgiable = [
            'SSHR'=>['name'=>"SSHR","image"=>"selfservice_pic.png",'condition'=>''],
            'Attendances'=>['name'=>"Attendances","image"=>"attandance.jpg",'condition'=>'disabled'],
            'Archive'=>['name'=>"Archive","image"=>"archive.png",'condition'=>'disabled'],
            'Clearance'=>['name'=>"Clearance","image"=>"clearance.png",'condition'=>'disabled'],
            'ticking'=>['name'=>"Ticking","image"=>"help_desk.jpg",'condition'=>'disabled'],
        ];
        $all_services_category = $this->specialSpecifService->GetPlatformServices($services_elgiable);

        $empno = $employee->employee_number;


        return view("frontend.portalservice",compact('all_services_category','user_type','empno'));
    }
}
