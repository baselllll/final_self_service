<!-- Navbar Start -->

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0"  id="design_nav">
    <div class="d-flex justify-content-between">
        <a href="{{ route('setLocale', ['locale' => 'ar']) }}"><span class="fi fi-sa"></span></a> &nbsp &nbsp
        <a href="{{ route('setLocale', ['locale' => 'en']) }}"><span class="fi fi-us"></span></a>
    </div>
    <button type="button" class="navbar-toggler order-1 ms-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div style="margin-left: 64px;">
@php
$repo_main = new \App\Http\Repository\MainOracleQueryRepo();
if(session()->has('employee') and session()->get('user_type') =="manger"){
    $getRequestsOfSpecficEmp_manger = $repo_main->getRequestsOfSpecficEmp(session()->get('employee')->employee_number,'manger');
    $getRequestsOfSpecficEmp_manger = json_encode($getRequestsOfSpecficEmp_manger);
    $getRequestsOfSpecficEmp_manger = json_decode($getRequestsOfSpecficEmp_manger);

}elseif(session()->has('employee') and session()->get('user_type') =="admin_manger"){
    $getRequestsOfSpecficEmp_admin_manger = $repo_main->getRequestsOfSpecficEmp(session()->get('employee')->employee_number,'admin_manger');
    $getRequestsOfSpecficEmp_admin_manger = json_encode($getRequestsOfSpecficEmp_admin_manger);
    $getRequestsOfSpecficEmp_admin_manger = json_decode($getRequestsOfSpecficEmp_admin_manger);

}

 @endphp
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            @if(session()->has('employee') and session()->get('user_type')!=="top_mng")

              @if(session()->get('user_type') ==\App\Enums\AppKeysProps::Manger()->value)
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" style="position: relative;">
                    <span class="badge badge-warning navbar-badge badge-above">
                        @if(isset($getRequestsOfSpecficEmp_manger) and count($getRequestsOfSpecficEmp_manger) > 0)
                            {{count($getRequestsOfSpecficEmp_manger)}}
                        @else
                            0
                        @endif
                    </span>
                            <i class="far fa-bell fa-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                            @if(isset($getRequestsOfSpecficEmp_manger))
                                @foreach($getRequestsOfSpecficEmp_manger as $item)
                                        <a target="_blank" href="get-details/{{$item->transaction_id}}" class="dropdown-item">
                                            <i class="fas fa-comment-dots"></i>
                                            @if($item->approval_status=="Manager Approved")
                                                <span style="font-weight: bold; text-decoration: underline" >Manager Approved</span>
                                            @elseif($item->approval_status=="Admin Mgr Approved")
                                                <span style="font-weight: bold; text-decoration: underline" >Admin Manager Approved</span>
                                            @elseif($item->approval_status=="Approved")
                                            @elseif($item->approval_status=="Delegated Assistant Approved")
                                                <span style="font-weight: bold; text-decoration: underline" > 	Delegated Assistant Approved </span>
                                            @elseif($item->approval_status=="Rejected")
                                                <span style="font-weight: bold; text-decoration: underline" > Rejected </span>
                                            @else
                                                <span style="font-weight: bold; text-decoration: underline" > Pending Approval </span>
                                            @endif
                                            &nbsp {{$item->absence_type}} ({{$item->transaction_id}}) Request
                                        </a>
                                        <div class="dropdown-divider">{{$item->transaction_id}}</div>
                                @endforeach
                            @endif
                        </div>
                    </li>
                @elseif(session()->get('user_type') ==\App\Enums\AppKeysProps::AdminManger()->value)
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" style="position: relative;">
                    <span class="badge badge-warning navbar-badge badge-above">
                        @if(isset($getRequestsOfSpecficEmp_admin_manger) and count($getRequestsOfSpecficEmp_admin_manger) > 0)
                            {{count($getRequestsOfSpecficEmp_admin_manger)}}
                        @else
                            0
                        @endif
                    </span>
                            <i class="far fa-bell fa-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                            @if(isset($getRequestsOfSpecficEmp_admin_manger))
                                @foreach($getRequestsOfSpecficEmp_admin_manger as $item)
                                    <a target="_blank" href="get-details/{{$item->transaction_id}}" class="dropdown-item">
                                        <i class="fas fa-comment-dots"></i>
                                        @if($item->approval_status=="Manager Approved")
                                            <span style="font-weight: bold; text-decoration: underline" >Manager Approved</span>
                                        @elseif($item->approval_status=="Admin Mgr Approved")
                                            <span style="font-weight: bold; text-decoration: underline" >Admin Manager Approved</span>
                                        @elseif($item->approval_status=="Approved")
                                        @elseif($item->approval_status=="Delegated Assistant Approved")
                                            <span style="font-weight: bold; text-decoration: underline" > 	Delegated Assistant Approved </span>
                                        @elseif($item->approval_status=="Rejected")
                                            <span style="font-weight: bold; text-decoration: underline" > Rejected </span>
                                        @else
                                            <span style="font-weight: bold; text-decoration: underline" > Pending Approval </span>
                                        @endif
                                        &nbsp {{$item->absence_type}} ({{$item->transaction_id}}) Request
                                    </a>
                                    <div class="dropdown-divider">{{$item->transaction_id}}</div>
                                @endforeach
                            @endif
                        </div>
                    </li>
              @endif

            @endif
        </ul>
    </div>

    @if(session()->has('employee'))
        <a style="font-weight: bold;color: red;font-size: 15px;text-decoration: underline;" href="{{route('get-employee-information')}}" class="nav-item nav-link">{{session()->get('employee_data')->employee_number}}</a>
        <a style="font-weight: bold;color: red; font-size: 15px;text-decoration: underline;"  href="{{route('get-employee-information')}}" class="nav-item nav-link ">{{logicTranslate(explode(' ',session()->get('employee_data')->employee_name)[0])}}</a>
    @endif

    @php
        $request = \Request::capture();
               $portalservices_segement = $request->segment(1);
 @endphp

    @if($portalservices_segement=="portal-services")
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" >
                @if(session()->has('employee'))
                    <a style="font-weight: bold;" href="{{route('logout')}}" class="btn btn-primary" id="logout_btn">@lang('messages.logout')<i class="fa fa-arrow-right ms-3"></i></a>
                @else
                @endif
            </div>
        </div>
    @else
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0" >
                @if(session()->has('employee'))

                    <a style="font-weight: bold;text-decoration: underline"  href="{{route('profile-employee')}}" class="nav-item nav-link">@lang('messages.EmpRequests')</a>
                    <a style="font-weight: bold;text-decoration: underline" href="{{route('home')}}" class="nav-item nav-link">@lang('messages.HOME')</a>
                    @if(session()->get('user_type')!=='top_mng')

                        <a style="font-weight: bold;text-decoration: underline" href="{{route('services-category')}}" class="nav-item nav-link" > <span >@lang('messages.NewRequest')</span></a>


                    @endif


                    @if(session()->get('user_type')=='top_mng' or session()->get('user_type')=='admin_manger' or session()->get('user_type')=='manger' or session()->get('delegated_type')=='delegated')
                        <a style="font-weight: bold;text-decoration: underline" href="{{route('delegation-view')}}" class="nav-item nav-link">@lang('messages.Delegation')</a>
                    @else
                        <a style="font-weight: bold;text-decoration: underline" href="{{route('delegation-history-employee')}}" class="nav-item nav-link">@lang('messages.Delegation')</a>
                    @endif
                    @if( session()->get("taswaya_emp")==true)
                        <a style="font-weight: bold;text-decoration: underline"  href="{{route('taswaya')}}" class="nav-item nav-link">@lang('messages.taswaya')</a>
                        <a style="font-weight: bold;text-decoration: underline"  href="{{route('clearance')}}" class="nav-item nav-link">@lang('messages.EOS')</a>
                    @endif
                    <a style="font-weight: bold;text-decoration: underline" href="{{route('help')}}" class="nav-item nav-link">@lang('messages.help')</a>
                    <a style="font-weight: bold;" href="{{route('logout')}}" class="btn btn-primary" id="logout_btn">@lang('messages.logout')<i class="fa fa-arrow-right ms-3"></i></a>


                @else
                    {{--                <a href="{{route('login-page')}}" class="btn btn-primary ">@lang('messages.login_click')<i class="fa fa-arrow-right ms-3"></i></a>--}}
                @endif
            </div>
        </div>
    @endif

    @include('sweetalert::alert')
</nav>

<!-- Navbar End -->

