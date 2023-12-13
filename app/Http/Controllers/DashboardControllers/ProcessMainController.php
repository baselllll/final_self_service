<?php

namespace App\Http\Controllers\DashboardControllers;

use App\Helper\DashboardHelper;
use App\Http\Controllers\Controller;
use App\Http\Repository\MainOracleQueryRepo;
use App\Http\Services\LoginService;
use Illuminate\Http\Request;

class ProcessMainController extends Controller
{
    public function __construct(DashboardHelper $dashboardHelper , LoginService $loginService)
    {
        $this->dashboardHelper = $dashboardHelper;
        $this->loginService = $loginService;
    }

    public function home(){
        $main_process =  json_encode($this->dashboardHelper->main_procee_images());
        $main_process = json_decode($main_process);
        return view('dashboard.home',compact('main_process'));
    }
    public function active_session(){
        $activeSession= $this->loginService->activeSession();
        foreach ($activeSession as &$newItem){
            $main_repo = new MainOracleQueryRepo();
            $newItem->full_name = $main_repo->GetEmployeeUsingFileNumber($newItem->employee_number)[0]->employee_name;
        }
        return view('dashboard.active_session',compact("activeSession"));
    }
    public function non_register_user(){
        $non_reg_users= $this->loginService->non_reg_users();
        return view('dashboard.non_register_user',compact("non_reg_users"));
    }
    public function otp_different_device(){
        $count_register = $this->loginService->count_register_user()->no_user;
        $count_not_register =$this->loginService->count_not_register_user()->no_user;
        return view('dashboard.otp_different_device',compact('count_register','count_not_register'));
    }
    public function register_user(){
        $reg_users = $this->loginService->reg_users();
        return view('dashboard.register_user',compact("reg_users"));
    }
    public function manual_add_absence(){
        return view('dashboard.manual_add_absence');
    }
    public function feature_new(){
        $feature_new = $this->loginService->feature_new();
        return view('dashboard.feature_new',compact('feature_new'));
    }
    public function add_details_feature(Request $request){
        $add_details_feature = $this->loginService->add_details_feature($request->all());
        return response()->json(['results'=>"success added or changed new feature"]);

    }

    public function tracking_r(){
        $tracking_users = $this->loginService->GetTrackingRequestsDetails();
        return view('dashboard.tracking_r',compact('tracking_users'));
    }

}
