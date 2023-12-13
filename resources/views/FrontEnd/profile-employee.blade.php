<!DOCTYPE html>
<html lang="en">

@include('includes._header')
<body>
<audio id="notificationSound" src="http://127.0.0.1:8000/mobo.mp3"></audio>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
@php
    $pending_status = \App\Enums\AppKeysProps::PendingStatus()->value;
 $manger_user_type = \App\Enums\AppKeysProps::Manger()->value;
 $admin_user_type = \App\Enums\AppKeysProps::AdminManger()->value;
 $top_user_type = \App\Enums\AppKeysProps::TopManger()->value;
 $admin_manger_approved= \App\Enums\AppKeysProps::AdminMgrApproved()->value;
 $Pend_approved_pending_req= \App\Enums\AppKeysProps::Pend_approved_pending_req()->value;
 $Mgr_approved_pending_req= \App\Enums\AppKeysProps::Mgr_approved_pending_req()->value;
 $accrued_balance= new \App\Http\Repository\MainOracleQueryRepo();
 @endphp
@include('includes._navbar',['requested_notification' => $requested_notification])



<div class="container-xxl py-5">

    <div class="row">
        @if($status_request=="request_service")
            <div class="col-12">
                <div class="row">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">@lang('messages.Services') </h6>
                        <h1 class="mb-5">@lang('messages.Absence Services')</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <div class="input-group mb-3">
                                <input type="text" id="service-filter" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                @foreach($all_services as $service)
                        <div class="col-lg-3 col-md-6 wow fadeInUp service-card" data-wow-delay="0.1s">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">
                                    <a href="{{route("service-details",['service_type'=>'Absence','absence_attendance_type_id'=>$service->absence_attendance_type_id,'name'=>$service->name])}}">
                                        <img class="img-fluid" src="{{asset("img/$service->image")}}" alt=""></a>
                                </div>

                                <div class="text-center p-4">
                                    <h5 class="mb-0"> @lang('messages.' . $service->name)</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="col-12">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">@lang('messages.Absence_pending') </h6>
                </div>
                <div class="row">
                    <div class="col-12" style="overflow: scroll;">
                        <table id="tablerow_structure" class="table table-striped bg-dark" >
                            <thead style="background:#1dafbd;color: white">
                            <tr>
                                <th scope="col">@lang('messages.mr_ServiceName') </th>
                                <th scope="col">@lang('messages.mr_EmployeeNumber') </th>
                                <th scope="col">@lang('messages.mr_EmployeeName') </th>
                                <th scope="col">@lang('messages.mr_StartDate') </th>
                                <th scope="col">@lang('messages.mr_EndDate') </th>
                                <th scope="col">@lang('messages.mr_Hours') </th>
                                <th scope="col">@lang('messages.mr_Status') </th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody style="color: black">
                            @foreach($requested_notification as $item)
                                @if($item->service_type=="absence")
                                    @include('modules.absence')
                                @endif

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">@lang('messages.EOS_pending')</h6>
                </div>
                <div class="row">
                    <div class="col-12" style="overflow: scroll;">
                        <table id="tablerow_structure" class="table table-striped bg-dark" >
                            <thead style="background:#1dafbd;color: white">
                            <tr>

                                <th scope="col">@lang('messages.mr_ServiceName') </th>
                                <th scope="col">@lang('messages.mr_EmployeeNumber') </th>
                                <th scope="col">@lang('messages.mr_EmployeeName') </th>
                                <th scope="col">@lang("messages.notified_eos_date") </th>
                                <th scope="col">@lang("messages.actual_eos_date") </th>
                                <th scope="col">@lang("messages.notice_period_days") </th>
                                <th scope="col">@lang('messages.mr_Status') </th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody style="color: black">
                            @foreach($requested_notification as $item)
                                @if($item->service_type=="eos")
                                    @include('modules.eos')
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        @endif
    </div>
</div>

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

<div class="modal fade" id="showAccutalsDetails" tabindex="-1" role="dialog" aria-labelledby="showAccutalsDetails" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div style="text-align: center">
                    <div>
                        <p><strong>@lang("messages.StartDate"):</strong> <span id="modal-start-date"></span></p>
                        <p><strong>@lang("messages.EndDate"):</strong> <span id="modal-end-date"></span></p>
                        <p><strong>@lang("messages.Accurals"):</strong> <span id="modal-accurals-no"></span></p>
                        <p><strong>@lang("messages.Differnce_Date"):</strong> <span id="modal-differnceDate"></span></p>
                        <p><strong>@lang("messages.taswiath_status"):</strong> <span id="modal-taswiath_status"></span></p>
                        <p><strong>@lang("messages.taswiath_note"):</strong><span id="modal-taswiath_note"></span></p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('messages.Close')</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


@include('includes._footer')

<script>
    // JavaScript function to handle the filtering on keyup event
    document.getElementById('service-filter').addEventListener('keyup', function () {
        const filterText = this.value.toLowerCase();
        const serviceCards = document.querySelectorAll('.service-card');
        console.log(serviceCards)
        serviceCards.forEach(card => {
            const serviceNameElement = card.querySelector('.mb-0');
            if (serviceNameElement) {
                const serviceName = serviceNameElement.textContent.toLowerCase();
                if (serviceName.includes(filterText)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            }
        });
    });
</script>



</body>
<script>
    setTimeout(function() {
        location.reload();
    }, 1000000);

</script>
<script>
    var today = new Date();
    document.getElementById('out-date').innerText = today;
</script>
</html>
