<!DOCTYPE html>
<html lang="en">

@include('includes._header')

<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


@include('includes._navbar')



<div class="container-xxl py-5">
    <div class="row" style="margin-left: 70px;">
        <div class="row">
            <div class="col-12">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">@lang('messages.Employee') </h6>
                    <h1 class="mb-5">@lang('messages.Tracking Request')</h1>
                </div>
            </div>
        </div>

        <div class="col-12">
            @if(($custom_details_employee->no_of_approvals=="3" and $custom_details_employee->approval_status=="Approved") or ($custom_details_employee->no_of_approvals=="2" and $custom_details_employee->approval_status=="Admin Mgr Approved"))
                <div class="container mt-3">
                </div>
                <br/>
            @endif

            <ul class="@if($custom_details_employee->no_of_approvals=="3") progressbar @else li_2_approval @endif" style="font-weight: bold">
                <li id="requested" class="approved" data-toggle="tooltip" data-placement="top">
                    <span class="requested_touch">@lang('messages.Requested')</span> <span id="{{ trim($custom_details_employee->no_of_approvals == '3' ? 'em_requested_tracking' : 'em_requested_tracking_approval_2') }}" class="requested_touch"> @lang('messages.Employee') </span>
                </li>
                <li id="manager"  class="{{ $custom_details_employee->mgr_approval_status == 'Pending' ? 'pending' : ($custom_details_employee->mgr_approval_status == str_contains($custom_details_employee->mgr_approval_status,"Approved") ? 'approved' : 'rejected') }}" data-toggle="tooltip" data-placement="top">
                    <span class="Manager_touch">@lang('messages.'.$custom_details_employee->mgr_approval_status )</span> <span  id="{{ trim($custom_details_employee->no_of_approvals == '3' ? 'mgr_requested_tracking' : 'mgr_requested_tracking_approval_2') }}" class="Manager_touch">@lang('messages.Manager')</span>
                </li>
                <li id="adminManger"  class="{{ $custom_details_employee->admin_mgr_approval_status == 'Pending' ? 'pending' : ($custom_details_employee->admin_mgr_approval_status ==  str_contains($custom_details_employee->admin_mgr_approval_status ,"Approved") ? 'approved' : 'rejected') }}" data-toggle="tooltip" data-placement="top" >
                    <span class="adminManger_touch">@lang('messages.'.$custom_details_employee->admin_mgr_approval_status)</span> <span id="{{ trim($custom_details_employee->no_of_approvals == '3' ? 'admin_requested_tracking' : 'admin_requested_tracking_approval_2') }}" class="adminManger_touch">@lang('messages.Admin Manager')</span>
                </li>
                @if($custom_details_employee->no_of_approvals=="2")

                @else
                    <li id="topManger"  class="{{ $custom_details_employee->top_management_approval_status == 'Pending' ? 'pending' : ($custom_details_employee->top_management_approval_status == str_contains($custom_details_employee->top_management_approval_status ,"Approved") ? 'approved' : 'rejected') }}" data-toggle="tooltip" data-placement="top" >
                        <span class="topManger_touch">@lang('messages.'.$custom_details_employee->top_management_approval_status)</span> <span id="top_requested_tracking" class="topManger_touch">@lang('messages.Top Management')</span>
                    </li>
            @endif
        </div>
        <br/>
        <div class="col-12">
            <p style="    margin-top: 20px;
    margin-bottom: -4rem;
    margin-left: 119px;
    color: darkcyan;
    font-weight: bold;">@lang("messages.tracking_hint")</p>
        </div>
        <div class="row box_content_tracking" id="tracking_container" style="font-size: 14px">
            <div class="col-2"></div>
            <div class="col-8" id="details_request" >
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="alert alert-danger" style="width: 165px;height: 45px;margin-top: -26px;">Request Details</h6>
                    <div class="row" >
                        <div class="col-4">

                            <span>@lang("messages.Transaction ID"):</span><span>{{$custom_details_employee->transaction_id}}</span><br/>
                            <span>@lang("messages.AbsenceType"):</span><span>{{$custom_details_employee->absence_type}}</span><br/>
                            <span>@lang("messages.CreationDate"):</span><span>{{\Carbon\Carbon::parse($custom_details_employee->creation_date)->format('Y-m-d H:i')}}</span><br/>

                            @if($custom_details_employee->service_type=="absence")
                                <span>@lang("messages.StartDate"):</span><span>{{$custom_details_employee->absence_start_date}}  {{$custom_details_employee->time_start}}</span><br/>
                                <span>@lang("messages.EndDate"):</span><span>{{$custom_details_employee->absence_end_date}}  {{$custom_details_employee->time_end}}</span><br/>
                            @elseif($custom_details_employee->service_type=="eos")

                                <span>@lang("messages.resignation_reason"):</span><span>{{$custom_details_employee->resignation_reason}}</span><br/>
                                <span>@lang("messages.notified_eos_date"):</span><span>{{\Carbon\Carbon::parse($custom_details_employee->notified_eos_date)->format('Y-m-d')}}</span><br/>
                                <span>@lang("messages.actual_eos_date"):</span><span>{{\Carbon\Carbon::parse($custom_details_employee->actual_eos_date)->format('Y-m-d')}}</span><br/>

                            @endif
                        </div>
                        <div class="col-4">

                            <span>@lang("messages.Requested To"):</span><span>{{explode(' ',$custom_details_employee->approver)[0]}}</span><br/>
                            <span>@lang("messages.Requested By"):</span><span>{{explode(' ',$custom_details_employee->requestor)[0]}}</span><br/>

                        </div>
                        <div class="col-4">
                            <span>@lang("messages.Replacement Number"):</span><span>(@if(isset($custom_details_employee->emno)) {{$custom_details_employee->emno}} @else @endif - {{explode(' ',$custom_details_employee->replacement_name)[0]}})</span><br/>
                            <span>@lang("messages.Comments"):</span><span>{{$custom_details_employee->official_permit_comments}}</span><br/>
                            @if($custom_details_employee->service_type=="eos")
                                <span>@lang("messages.eos_taswiah_status"):</span><span>@if($custom_details_employee->eos_taswiah_status=="1") Confirmed @else @endif</span><br/>
                                <span>@lang("messages.eos_clearance_status"):</span><span>{{$custom_details_employee->eos_clearance_status}}</span><br/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8" id="manger_status_details" style="display: none">
                <h6 class="alert alert-danger" style="width: 212px;height: 45px;margin-top: -26px;">Manager</h6>
                <div class="row">
                    <div class="col-5">
                        <span>@lang("messages.Manager Status"):</span><span>{{$custom_details_employee->mgr_approval_status}}</span><br/>
                        <span>@lang("messages.Manager Approval Date"):</span><span>@if(isset($custom_details_employee->mgr_action_date)) {{\Carbon\Carbon::parse($custom_details_employee->mgr_action_date)->format('Y-m-d H:i')}}@else  @endif</span><br/>
                    </div>
                    <div class="col-4">
                        <span>@lang("messages.Manager ApproveNote"):</span><span>{{$custom_details_employee->mgr_approve_note}}</span><br/>

                        <span>@lang("messages.Manager RejectNote"):</span><span>{{$custom_details_employee->mgr_reject_note}}</span><br/>

                    </div>
                </div>
            </div>
            <div class="col-8" id="admin_manger_status_details" style="display: none">
                <h6 class="alert alert-danger" style="width: 212px;height: 45px;margin-top: -26px;">Admin Manager</h6>
                <div class="row">
                    <div class="col-5">
                        <span>@lang('messages.AdminMng Status'):</span><span>{{$custom_details_employee->admin_mgr_approval_status}}</span><br/>
                        <span>@lang('messages.AdminMng Approval Date'):</span><span>@if(isset($custom_details_employee->admin_mgr_action_date)) {{\Carbon\Carbon::parse($custom_details_employee->admin_mgr_action_date)->format('Y-m-d H:i')}}@else  @endif</span><br/>
                    </div>

                    <div class="col-4">
                        <span>@lang('messages.AdminMng ApproveNote'):</span><span>{{$custom_details_employee->admin_mgr_approval_note}}</span><br/>

                        <span>@lang('messages.AdminMng RejectNote'):</span><span>{{$custom_details_employee->admin_mgr_reject_note}}</span><br/>
                    </div>
                </div>
            </div>
            <div class="col-8" id="top_manager_status_details" style="display: none">
                <h6 class="alert alert-danger" style="width: 212px;height: 45px;margin-top: -26px;">Top Manager</h6>
                <div class="row">
                    <div class="col-5">
                        <span>@lang('messages.TopMng Status'):</span><span>{{$custom_details_employee->top_management_approval_status}}</span><br/>
                        <span>@lang('messages.TopMng Approval Date'):</span><span>@if(isset($custom_details_employee->top_mgmt_action_date)) {{\Carbon\Carbon::parse($custom_details_employee->top_mgmt_action_date)->format('Y-m-d H:i')}}@else  @endif</span><br/>
                    </div>

                    <div class="col-4">
                        <span>@lang('messages.TopMng ApproveNote'):</span><span>{{$custom_details_employee->top_mgmt_approval_note}}</span><br/>

                        <span>@lang('messages.TopMng RejectNote'):</span><span>{{$custom_details_employee->top_mgmt_reject_note}}</span><br/>
                    </div>
                </div>
            </div>
            <div class="col-2">
                @if(isset($filePath) and isset($custom_details_employee->document_name))
                    <a href="/public{{$filePath}}/{{$custom_details_employee->document_name}}" target="_blank">
                        <div class="card_file">
                            <i class="fas fa-file-pdf fa-icon" id="pdfIcon"></i>
                            <h4>Click</h4>
                        </div>
                    </a>
                @endif


                @php

                    $pending_status = \App\Enums\AppKeysProps::PendingStatus()->value;
                 $manger_user_type = \App\Enums\AppKeysProps::Manger()->value;
                 $admin_user_type = \App\Enums\AppKeysProps::AdminManger()->value;
                 $top_user_type = \App\Enums\AppKeysProps::TopManger()->value;
                 $admin_manger_approved= \App\Enums\AppKeysProps::AdminMgrApproved()->value;
                 $Pend_approved_pending_req= \App\Enums\AppKeysProps::Pend_approved_pending_req()->value;
                 $Mgr_approved_pending_req= \App\Enums\AppKeysProps::Mgr_approved_pending_req()->value;
                 $accrued_balance= new \App\Http\Repository\MainOracleQueryRepo();
                 $user_type =  session()->get('user_type');
                 $special_type_user_default =  session()->get('special_type_user_default');

                @endphp
                <tr style="background-color: #181d38">
                    @if($custom_details_employee->no_of_approvals==3)
                        @if((($custom_details_employee->approval_status==$Pend_approved_pending_req or $custom_details_employee->approval_status==str_contains($custom_details_employee->approval_status,'Delegated')) and $user_type==$manger_user_type) or ($custom_details_employee->mgr_person_id == $custom_details_employee->admin_mgr_person_id and  $special_type_user_default==$manger_user_type and $custom_details_employee->admin_mgr_approval_status ==$pending_status ) )
                            @if($custom_details_employee->mgr_approval_status==$pending_status )
                                <td style="display: flex;justify-content: space-evenly;">
                                    <a href="#">
                                        <button
                                            data-type_person="Manager"

                                            data-notify_confirm="{{$custom_details_employee->mgr_notif_id}}"
                                            data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                            data-empno="{{$custom_details_employee->empno}}"
                                            type="button"
                                            class="btn btn-success confirmationClick"
                                            data-toggle="modal" data-target="#confirmation"><i
                                                class="fas fa-check"></i>
                                        </button>
                                    </a>
                                    <a href="#">
                                        <button data-type_person="Manager"
                                                data-notify_confirm="{{$custom_details_employee->mgr_notif_id}}"
                                                data-transaction_id="{{$custom_details_employee->transaction_id}}"

                                                type="button"
                                                class="btn btn-danger addedNoteClick"
                                                data-toggle="modal" data-target="#addedNote"><i
                                                class="fas fa-sharp fa-solid fa-x fa-bounce fa-lg"
                                                style="color: #c92233;"></i>X
                                        </button>
                                    </a>
                                </td>
                            @endif

                        @elseif((($custom_details_employee->approval_status==$admin_manger_approved or $custom_details_employee->approval_status==str_contains($custom_details_employee->approval_status,'Delegated')) and  $user_type==$top_user_type ) )
                            @if($custom_details_employee->top_management_approval_status==$pending_status )
                                <td style="display: flex;justify-content: space-evenly;">
                                    <a href="#">
                                        <button
                                            data-type_person="TopMgr"
                                            data-notify_confirm="{{$custom_details_employee->top_mgmt_notif_id}}"
                                            data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                            type="button"
                                            class="btn btn-success confirmationClick"
                                            data-toggle="modal" data-target="#confirmation"><i
                                                class="fas fa-check"></i>
                                        </button>
                                    </a>
                                    <a href="#">
                                        <button data-type_person="TopMgr"

                                                data-notify_confirm="{{$custom_details_employee->top_mgmt_notif_id}}"
                                                data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                                type="button"
                                                class="btn btn-danger addedNoteClick"
                                                data-toggle="modal" data-target="#addedNote"><i
                                                class="fas fa-sharp fa-solid fa-x fa-bounce fa-lg"
                                                style="color: #c92233;"></i>X
                                        </button>
                                    </a>
                                </td>
                            @endif


                        @elseif((($custom_details_employee->approval_status==$Mgr_approved_pending_req  or $custom_details_employee->approval_status==str_contains($custom_details_employee->approval_status,'Delegated')) and $user_type==$admin_user_type )  )
                            @if($custom_details_employee->admin_mgr_approval_status==$pending_status )
                                <td style="display: flex;justify-content: space-evenly;">
                                    <a href="#">
                                        <button
                                            data-type_person="AdminMgr"

                                            data-notify_confirm="{{$custom_details_employee->admin_mgr_notif_id}}"
                                            data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                            type="button"
                                            class="btn btn-success confirmationClick"
                                            data-toggle="modal" data-target="#confirmation"><i
                                                class="fas fa-check"></i></button>
                                    </a>
                                    <a href="#">
                                        <button data-type_person="AdminMgr"

                                                data-notify_confirm="{{$custom_details_employee->admin_mgr_notif_id}}"
                                                data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                                type="button"
                                                class="btn btn-danger addedNoteClick"
                                                data-toggle="modal" data-target="#addedNote"><i
                                                class="fas fa-sharp fa-solid fa-x fa-bounce fa-lg"
                                                style="color: #c92233;"></i>X
                                        </button>
                                    </a>

                                </td>
                            @endif

                        @endif

                    @elseif($custom_details_employee->no_of_approvals==2)

                        @if((($custom_details_employee->approval_status==$Pend_approved_pending_req  or $custom_details_employee->approval_status==str_contains($custom_details_employee->approval_status,'Delegated')) and $user_type==$manger_user_type) or ($custom_details_employee->mgr_person_id == $custom_details_employee->admin_mgr_person_id and  $special_type_user_default==$manger_user_type) )
                            @if($custom_details_employee->mgr_approval_status==$pending_status )
                                <td style="display: flex;justify-content: space-evenly;">
                                    <a href="#">
                                        <button
                                            data-type_person="Manager"

                                            data-notify_confirm="{{$custom_details_employee->mgr_notif_id}}"
                                            data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                            type="button"
                                            class="btn btn-success confirmationClick"
                                            data-toggle="modal" data-target="#confirmation"><i
                                                class="fas fa-check"></i></button>
                                    </a>
                                    <a href="#">
                                        <button data-type_person="Manager"

                                                data-notify_confirm="{{$custom_details_employee->mgr_notif_id}}"
                                                data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                                type="button"
                                                class="btn btn-danger addedNoteClick"
                                                data-toggle="modal" data-target="#addedNote"><i
                                                class="fas fa-sharp fa-solid fa-x fa-bounce fa-lg"
                                                style="color: #c92233;"></i>X
                                        </button>
                                    </a>
                                </td>
                            @endif

                        @elseif((($custom_details_employee->approval_status==$Mgr_approved_pending_req  or $custom_details_employee->approval_status==str_contains($custom_details_employee->approval_status,'Delegated')) and ($user_type==$admin_user_type )) )
                            @if($custom_details_employee->admin_mgr_approval_status==$pending_status )

                                <td style="display: flex;justify-content: space-evenly;">
                                    <a href="#">
                                        <button
                                            data-type_person="AdminMgr"
                                            data-notify_confirm="{{$custom_details_employee->admin_mgr_notif_id}}"
                                            data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                            type="button"
                                            class="btn btn-success confirmationClick"
                                            data-toggle="modal" data-target="#confirmation"><i
                                                class="fas fa-check"></i></button>
                                    </a>
                                    <a href="#">
                                        <button data-type_person="AdminMgr"
                                                data-notify_confirm="{{$custom_details_employee->admin_mgr_notif_id}}"
                                                data-transaction_id="{{$custom_details_employee->transaction_id}}"
                                                type="button"
                                                class="btn btn-danger addedNoteClick"
                                                data-toggle="modal" data-target="#addedNote"><i
                                                class="fas fa-sharp fa-solid fa-x fa-bounce fa-lg"
                                                style="color: #c92233;"></i>X
                                        </button>
                                    </a>
                                </td>
                @endif
                @endif
                @endif

            </div>


        </div>


    </div>
</div>


@include('includes._footer')
<script>
    console.log("https://sshr.alajmi.com.sa/public/index.php/get-details/{{$custom_details_employee->transaction_id}}")
    if (window.innerWidth <= 800 && window.location.href === "https://sshr.alajmi.com.sa/public/index.php/get-details/{{$custom_details_employee->transaction_id}}") {
        alert("@lang('messages.rotate_screen')");

        // if(confirmation){
        //     // document.body.style.transform = 'rotate(90deg)';
        //     // document.body.style.transformOrigin = 'left';
        //     // document.body.style.width = '97vh';
        //     // document.body.style.height = '263vw';
        //     // document.body.style.marginLeft = '541px';
        //     // document.body.style.marginTop = '-506px';
        //     // var navbarElement = document.querySelector('.navbar');
        //     //
        //     // // Add CSS styles to make it fixed
        //     // navbarElement.style.position = 'fixed';
        //     // navbarElement.style.top = '22px';
        //     // navbarElement.style.left = '0';
        //     // navbarElement.style.width = '100%';
        //     //
        //     // var metaViewport = document.createElement('meta');
        //     // metaViewport.name = 'viewport';
        //     // metaViewport.content = 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no';
        //     // document.head.appendChild(metaViewport);
        // }

    }

</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            html: true, // Enable HTML content
        });
    });
    //lists
    const requestedList = document.getElementsByClassName('requested_touch')[0];
    const managerList = document.getElementsByClassName('Manager_touch')[0];
    const adminMangerList = document.getElementsByClassName('adminManger_touch')[0];
    console.log(adminMangerList)
    const topMangerList = document.getElementsByClassName('topManger_touch')[0];
    //lists
    const details_request = document.getElementById('details_request');
    const manger_status_details = document.getElementById('manger_status_details');
    const admin_manger_status_details = document.getElementById('admin_manger_status_details');
    const top_manager_status_details = document.getElementById('top_manager_status_details');

    // ✅ Change button text on click
    requestedList.addEventListener('mouseover', function handleClick() {
        details_request.style.display = 'block'
        manger_status_details.style.display = 'none'
        admin_manger_status_details.style.display = 'none'
        top_manager_status_details.style.display = 'none'
    });
    managerList.addEventListener('mouseover', function handleClick() {
        console.log(managerList)
        details_request.style.display = 'none'
        manger_status_details.style.display = 'block'
        admin_manger_status_details.style.display = 'none'
        top_manager_status_details.style.display = 'none'
    });
    adminMangerList.addEventListener('mouseover', function handleClick() {
        details_request.style.display = 'none'
        manger_status_details.style.display = 'none'
        admin_manger_status_details.style.display = 'block'
        top_manager_status_details.style.display = 'none'
    });
    topMangerList.addEventListener('mouseover', function handleClick() {
        details_request.style.display = 'none'
        manger_status_details.style.display = 'none'
        admin_manger_status_details.style.display = 'none'
        top_manager_status_details.style.display = 'block'
    });

</script>


<div class="modal fade" id="addedNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <form action="{{route('reject-request')}}" method="post">
                        @csrf

                        <input type="hidden" name="notify_confirm" id="notify_confirm" value=""/>
                        <input type="hidden" name="transaction_id" id="transaction_id" value=""/>
                        <input type="hidden" name="type_person" id="type_person" value=""/>
                        <input type="hidden" name="user_type" id="user_type" value=""/>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"
                                   style="float: left;">@lang('messages.Added_Notes')</label>
                            <textarea name="note" class="form-control" id="note" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" style="margin: 17px 166px;width: 163px"
                                    class="btn btn-primary align-content-center">@lang('messages.Yes')</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('messages.Close')</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div style="text-align: center">
                    <div>
                        <form action="{{route('approve-request')}}" method="post">
                            @csrf
                            <input type="hidden" name="notify_confirm" id="notify_confirm" value=""/>
                            <input type="hidden" name="transaction_id" id="transaction_id" value=""/>
                            <input type="hidden" name="empno" id="empno" value=""/>
                            <input type="hidden" name="type_person" id="type_person" value=""/>
                            <input type="hidden" name="user_type" id="user_type" value=""/>
                            <input type="hidden" name="absence_type" id="user_type" value=""/>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"
                                       style="float: left;">@lang('messages.Added_Notes')</label>
                                <textarea name="note" class="form-control" id="note" rows="3"></textarea>
                            </div>
                            <br/>
                            @if(session()->get('user_type')==$manger_user_type)
                                <div class="form-floating" style="padding-top: 16px;">
                                    <label for="">@lang('messages.Replacement Employee Number')</label>
                                    <select  name="replacement_employee_number" class="form-control" id="replacementEmployeeSelect">
                                        <option class="form-control" value=""></option>
                                    </select>
                                </div>
                            @endif

                            <div class="form-group">
                                <button type="submit" style="margin: 17px 166px;width: 163px"
                                        class="btn btn-primary">@lang('messages.Yes')</button>
                            </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">@lang('messages.Close')</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>

</html>
