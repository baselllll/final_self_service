<!DOCTYPE html>
<html lang="en">
@php
    $accrued_balance= new \App\Http\Repository\MainOracleQueryRepo();
    @endphp
@include('includes._header')

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include('includes._navbar')

    <div class="container">
        <br>
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">@lang('messages.gawazat_Absence_Annual_Emegency') </h6>
        </div>
        <br>
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-12">
                        <div style=" overflow: auto;">
                            <table id="absense_table" class="table table-striped bg-dark" style="width:100%; color: white">
                                <thead style="background: #9b6118">
                                <tr>
                                    <th>@lang('messages.SerialNumber')</th>
                                    <th scope="col">@lang('messages.mr_ServiceName') </th>
                                    <th scope="col">@lang('messages.Tashira') </th>
                                    <th scope="col">@lang('messages.mr_EmployeeNumber') </th>
                                    <th scope="col">@lang('messages.mr_EmployeeName') </th>
                                    <th scope="col">@lang('messages.Department') </th>
                                    <th scope="col">@lang('messages.mr_Status') </th>
                                    <th scope="col"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($absence_requests as $item)
                                    @if($item->absence_type==\App\Enums\AppKeysProps::Emergency_Leave()->value or $item->absence_type==\App\Enums\AppKeysProps::Annual_Leave()->value)
                                        @if($item->jawazat_dept=="Y")
                                            <tr>
                                                <td style="color: white; font-size: 15px;">{{$loop->iteration }}</td>
                                                <td style="color: white">{{$item->absence_type}}</td>
                                                <td style="color: white">{{$item->jawazat_dept}}</td>
                                                <td style="color: white">{{$item->empno}}</td>
                                                <td style="color: white">{{$item->emp_name}}</td>
                                                <td style="color: white">{{$item->mgr_cc_name}}</td>
                                                <td style="color: white">{{$item->approval_status}}</td>
                                                @php
                                                    $date = \Carbon\Carbon::create($item->absence_start_date);
                                                    $formattedDate = $date->format('d-M-Y');
                                                     $number_accural = $accrued_balance->accrued_balance($item->empno,$formattedDate);
                                                @endphp
                                                <td>
                                                    <div class="d-flex">
                                                        @if($item->jawazat_dept=="Y")
                                                            @if($item->jawazat_status=="Y")
                                                            @else
                                                                <a href="#">
                                                                    <button
                                                                        data-transaction_id="{{$item->transaction_id}}"
                                                                        data-empno="{{$item->empno}}"
                                                                        type="button"
                                                                        class="btn btn-success confirmationClick"
                                                                        data-toggle="modal" data-target="#confirmation"><i
                                                                            class="fas fa-check"></i>
                                                                    </button>
                                                                </a>
                                                            @endif

                                                        @endif
                                                        <a href="{{route("get-details",['transaction_id'=>$item->transaction_id])}}">
                                                            <button  type="button"
                                                                     class="btn btn-warning"
                                                            ><i class="fa fa-bars" aria-hidden="true" ></i></button>
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endif

                                    @endif

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                    </div>
                    <div class="col-1">

                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">@lang('messages.gawazat_Eos_Pending') </h6>
                    </div>
                    <div class="col-12">
                        <div style=" overflow: auto;">
                            <table id="absense_table_2" class="table table-striped bg-dark" style="width:100%; color: white">
                                <thead style="background: #9b6118">
                                <tr>
                                    <th>@lang('messages.SerialNumber')</th>
                                    <th scope="col">@lang('messages.mr_ServiceName') </th>
                                    <th scope="col">@lang('messages.Tashira') </th>
                                    <th scope="col">@lang('messages.mr_EmployeeNumber') </th>
                                    <th scope="col">@lang('messages.mr_EmployeeName') </th>
                                    <th scope="col">@lang('messages.Department') </th>
                                    <th scope="col">@lang('messages.mr_Status') </th>
                                    <th scope="col"> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($absence_requests as $item)
                                    @if($item->approval_status==\App\Enums\AppKeysProps::TopManger_Approved()->value)
                                        <tr>
                                            <td style="color: white; font-size: 15px;">{{$loop->iteration }}</td>
                                            <td style="color: white">{{$item->absence_type}}</td>
                                            <td style="color: white">{{$item->jawazat_dept}}</td>
                                            <td style="color: white">{{$item->empno}}</td>
                                            <td style="color: white">{{$item->emp_name}}</td>
                                            <td style="color: white">{{$item->mgr_cc_name}}</td>
                                            <td style="color: white">{{$item->approval_status}}</td>

                                            <td>
                                                <div class="d-flex">
                                                    @if($item->jawazat_dept=="Y")
                                                        @if($item->jawazat_status=="Y")
                                                        @else
                                                            <a href="#">
                                                                <button
                                                                    data-transaction_id="{{$item->transaction_id}}"
                                                                    data-empno="{{$item->empno}}"
                                                                    type="button"
                                                                    class="btn btn-success confirmationClick"
                                                                    data-toggle="modal" data-target="#confirmation"><i
                                                                        class="fas fa-check"></i>
                                                                </button>
                                                            </a>
                                                        @endif

                                                    @endif
                                                    <a href="{{route("get-details",['transaction_id'=>$item->transaction_id])}}">
                                                        <button  type="button"
                                                                 class="btn btn-warning"
                                                        ><i class="fa fa-bars" aria-hidden="true" ></i></button>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                    @endif

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

   @include('includes._footer')



    <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div style="text-align: center">
                        <div>
                            <form action="{{route('approve-request-gawazat')}}" method="post">
                                @csrf
                                <input type="hidden" name="transaction_id" id="transaction_id" value=""/>
                                <input type="hidden" name="empno" id="empno" value=""/>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"
                                           style="float: left;">@lang('messages.Send_Message')</label>

                                </div>
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
