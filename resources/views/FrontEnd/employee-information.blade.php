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


@include('includes._navbar',['requested_notification' => $requested_notification])

<div class="container-xxl py-5">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-4"> <div class="card" style="width: 20rem;">
                <img class="rounded-circle shadow-4-strong" width="135px" height="135px" style="margin-left: 83px" alt="avatar2" src="/public/{{$filePath}}" />
                <div class="card-body" style='text-align: center;'>
                    <button style="margin-top: -95px;margin-left: 177px;"  type="button" class="btn btn-sm-primary" data-toggle="modal" data-target="#ImageUpload">
                        <i class="fas fa-edit"></i>
                    </button>

                    <h5 class="card-title">{{$employee->employee_number}}</h5>
                    <h5 class="card-title">{{$employee->employee_name}}</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div>

                <div class="testimonial-text bg-light text-center p-4 font-weight-bold ">
                    <p><span>{{$employee->department}}</span> : @lang('messages.Department')</p>
                    <p><span>{{$employee->job}} : @lang('messages.Job') </span></p>
                    <p><span>{{$employee->position}} :  </span> @lang('messages.Position') </p>
                    <p><span>{{$employee->location}} : </span> @lang('messages.Location')</p>
                    <p>@lang('messages.Cost_center') : <span>{{$cost_center}} <button disabled type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#costecnterModal">
                        <i class="fas fa-edit"></i>
                    </button></span></p>
                    <p><span>{{$employee_more_details->email_address}} : </span> @lang('messages.email_employee')  </p>
                    <p>@lang('messages.phone_number') : <span>{{$employee_more_details->phone_number}} <button type="button" class="btn btn-sm btn-primary" disabled data-toggle="modal" data-target="#otpModal_changePhone">
                        <i class="fas fa-edit"></i>
                    </button></span></p>
                    <p>   <button type="button" class="btn btn-success" disabled data-toggle="modal" data-target="#salarymodal">
                            <i class="fas fa-money"> Salary</i>
                        </button></p>
                </div>

            </div>
        </div>
    </div>



@include('includes._footer')


<div class="modal fade" id="EmployeeDetails" tabindex="-1" role="dialog" aria-labelledby="EmployeeDetails" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div style="text-align: center">
                    <div>
                        <div class="testimonial-item text-center">
                            @if(isset($filePath))
                                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{$filePath}}"
                                     style="width: 100px; height: 100px;">
                            @endif
                            <h5 class="mb-0">
                                {{logicTranslate($employee->employee_name)}}
                            </h5>
                            <p>@lang('messages.Employer')</p>
                            <div class="testimonial-text bg-light text-center p-4">
                               <p>@lang('messages.Department') : <span>{{$employee->department}}</span></p>
                                <p>@lang('messages.Job') : <span>{{$employee->job}}</span></p>
                                <p>@lang('messages.Position') : <span>{{$employee->position}}</span></p>
                                <p>@lang('messages.Location') : <span>{{$employee->location}}</span></p>
                                <p>@lang('messages.Cost_center') : <span>{{$cost_center}}</span></p>
                                <p>@lang('messages.email_employee') : <span>{{$employee_more_details->email_address}}</span></p>
                                <p>@lang('messages.phone_number') : <span>{{$employee_more_details->phone_number}}</span></p>
                            </div>
                        </div>
                    </div>
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


<div class="modal fade" id="ImageUpload" tabindex="-1" role="dialog" aria-labelledby="ImageUpload" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div style="text-align: center">
                    <div>
                        <div class="testimonial-item text-center">
                            <div class="card mx-auto" style="width: 18rem; background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-4">@lang('messages.Image_Upload')</h5>

                                    <form action="{{'upload_image'}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="image" class="form-label">@lang('messages.Choose_image')</label>
                                            <input required type="file" class="form-control" id="image" name="image" accept="image/*">
                                        </div>

                                        <button type="submit" class="btn btn-success">@lang('messages.Upload')</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">@lang('messages.Close')</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="salarymodal" tabindex="-1" role="dialog" aria-labelledby="salarymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mx-auto" style="width: 18rem; background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-4">Salary Details</h5>
                        <div class="mb-3">
                            <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                        </div>
                        <p class="card-text fs-5" id="salarySlip" style="display: none">Salary Slip: <span class="fw-bold text-primary">456,565 SAR</span></p>
                        <p class="card-text fs-5" id="deduction" style="display: none">Deduction: <span class="fw-bold text-danger">100 SAR</span></p>
                        <hr class="my-4">
                         </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('messages.Close')</button>
                    <button type="button" class="btn btn-primary" onclick="toggleDetails()">Show Details</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleDetails() {
        // Toggle the visibility of salary slip and deduction details
        var salarySlip = document.getElementById('salarySlip');
        var deduction = document.getElementById('deduction');
        var toggleButton = document.querySelector('.btn-primary');

        salarySlip.style.display = (salarySlip.style.display === 'none') ? 'block' : 'none';
        deduction.style.display = (deduction.style.display === 'none') ? 'block' : 'none';

        // Toggle button text
        toggleButton.textContent = (toggleButton.textContent === 'Show Details') ? 'Hide Details' : 'Show Details';
    }
</script>



<div class="modal fade" id="costecnterModal" tabindex="-1" role="dialog" aria-labelledby="costecnterModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mx-auto" style="width: 18rem; background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-4">Update Cost Center</h5>

                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="oldCostCenter" class="form-label">Old Cost Center</label>
                                <input type="text" class="form-control" id="oldCostCenter" name="oldCostCenter" required>
                            </div>

                            <div class="mb-3">
                                <label for="newCostCenter" class="form-label">New Cost Center</label>
                                <input type="text" class="form-control" id="newCostCenter" name="newCostCenter" required>
                            </div>

                            <button type="submit" class="btn btn-success">Update Cost Center</button>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">@lang('messages.Close')</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
<div class="modal fade" id="otpModal_changePhone" tabindex="-1" role="dialog" aria-labelledby="costecnterModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card mx-auto" style="width: 18rem; background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-center">
                            <h5 class="card-title mb-4">@lang('messages.Update_phone')</h5>

                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="bg bg-warning"  for="phone_number">(05xxxxxxxxx)</label>
                                    <input type="number" required min="0" value="" maxlength="10" class="form-control" id="phoneNumber" placeholder="@lang("messages.phone_number")">
                                    <div>
                                        <label><span style="font-size: 12px; color: red; font-weight: bold;" id="countdown_timer_check"></span></label>
                                        <span style="font-weight: bold;font-size: 12px;color: red;" id="phone_verification_message" class="verification-message"></span>

                                        <button id="send_btn_otp_check" type="button" style="float: right" class="btn btn-warning btn-sm" onclick="sendOtpBtnCheck()">@lang("messages.otp_btn")</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control" id="otp" placeholder="Enter OTP">
                                </div>
                                <br/>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary checkBtn_class " id="checkBtn" onclick="checkOTP()">@lang("messages.Send")</button>
                            <button type="button" class="btn btn-primary updateBtn_class" style="display: none;"  id="updateBtn"  onclick="update_phone_profile()">@lang("messages.Update")</button>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('messages.Close')</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

<script>
    var phoneNumber_after_verified = document.getElementById("phoneNumber").value;
    async function  update_phone_profile(){
        var otp = document.getElementById("otp").value;
        if(otp) {
            const employeeNumber = {{$employee->employee_number}};
            const phone_number = phoneNumber_after_verified;
            console.log(employeeNumber)
            var otp = document.getElementById("otp").value;
            const response = await $.ajax({
                url: "{{ route('update_phone_profile') }}",
                method: 'POST',
                data: {
                    otp: otp,
                    employee_number: employeeNumber,
                    phone_number: phone_number,
                    _token: "{{ csrf_token() }}"
                }
            });
            if(response){
                if(response.verified=="1"){
                    alert("success updated")
                    // Reload the current page
                    window.location.reload();

                }else{
                    alert("failed updated")
                }
            }
        }
    }
    async function checkOTP() {
        var otp = document.getElementById("otp").value;
        if(otp) {
            const employeeNumber = {{$employee->employee_number}};
            console.log(employeeNumber)
            var otp = document.getElementById("otp").value;
            const response = await $.ajax({
                url: "{{ route('send_otp_for_check_otp') }}",
                method: 'POST',
                data: {
                    otp: otp,
                    employee_number: employeeNumber,
                    _token: "{{ csrf_token() }}"
                }
            });
            if(response.verified==1){
                $('#email_personnal_block').removeClass('d-none').addClass('d-block');
                $('#otp').hide();
                $("#otp_btn_sms_check").hide();
                $("#countdown_timer_check").hide();
                alert("success verified phone number")
                // Hide the button with class 'updateBtn_class'
                var updateBtn = document.getElementById('updateBtn');
                updateBtn.style.display = 'block';
                var checkBtn = document.getElementById('checkBtn');
                checkBtn.style.display = 'none';


            }else{
                alert("failed verified phone number")
            }
        }
    }

    async function sendOtpBtnCheck() {
        var phoneNumber_input_main = document.getElementById("phoneNumber").value;
        $('#send_btn_otp_check').hide();
        if(phoneNumber_input_main.length == 10){
            phoneNumber_after_verified = phoneNumber_input_main
            const employeeNumber = {{$employee->employee_number}};


            const response = await $.ajax({
                url: "{{ route('send_otp_for_check_before') }}",
                method: 'POST',
                data: {
                    phone_number: phoneNumber_input_main,
                    employee_number: employeeNumber,
                    _token: "{{ csrf_token() }}"
                }
            });
            if (response.sended == 1) {
                var countdownTime = 120; // 4 minutes in seconds
                var countdownInterval = setInterval(updateCountdown, 1000);

                function updateCountdown() {
                    var minutes = Math.floor(countdownTime / 60);
                    var seconds = countdownTime % 60;
                    $('#countdown_timer_check').text(minutes + " minutes " + seconds + " seconds");
                    countdownTime--;
                    $('#otp_btn_sms').hide();
                    $('#phoneNumber').prop('readonly', true);
                    // document.getElementById('updateBtn').setAttribute('disabled', 'true');
                    // document.getElementById('checkBtn').removeAttribute('disabled');

                    if (countdownTime < 0) {
                        clearInterval(countdownInterval);
                        $('#countdown_timer_check').text("@lang('messages.Countdown finished')");
                        $('#otp_btn_sms').show();
                        $('#phoneNumber').prop('readonly', false);
                    }
                }
            }
        }else{
            console.log(phoneNumber_input_main.length);
            $("#phone_number_input").focus();
        }

    }
</script>

</body>

</html>
