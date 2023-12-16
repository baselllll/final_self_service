<!DOCTYPE html>
<html lang="en">

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

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">@lang('messages.Services')   @lang('messages.' . $service_type) </h6>
        </div>
        <br>
        @if(isset($service_type))
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"></div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <form action="{{route('add-special-service-detail')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$service_type}}" name="service_type">
                        <input type="hidden" value="{{$main_service_request_sub}}" name="flex_name">
                        <input type="hidden" value="{{$flex_id}}" name="flex_id">

                        <div class="row g-3">

                            @foreach($service_attri as $input_item)
                                @if( $input_item->type=="checkbox")
                                  @php
                                        $segmentPlaceholder = app()->getLocale() == 'en' ? "Need $input_item->segment_name  Entry & Exist" : "تحتاج $input_item->ar_text";
                                    @endphp
                                @else
                                    @php
                                        $segmentPlaceholder = app()->getLocale() == 'en' ? "Enter $input_item->segment_name" : "ادخل $input_item->ar_text";
                                    @endphp
                                @endif



                                <div class="col-12">
                                    <div   @if($input_item->type=="checkbox")  class="form-floating   alert alert-success" @else class="form-floating" @endif >
                                        <div @if($input_item->type=="checkbox")  class="form-check mt-2" @else class="form-floating" @endif >
                                            <input type="{{$input_item->type}}" class="form-control @if($input_item->type=="checkbox") form-check-input @endif" name="{{$input_item->segment_name}}"  id="{{$input_item->segment_name}}" placeholder="{{$segmentPlaceholder}}">
                                            <label class="@if($input_item->type=="checkbox") form-check-label @endif" for="{{$segmentPlaceholder}}">{{$segmentPlaceholder}}</label>
                                        </div>
                                        <br/>
                                    </div>

                                </div>
                            @endforeach



                            <div class="row g-2">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <button class="btn btn-primary w-100 h-100" type="submit">@lang('messages.Send')</button>
                                </div>
                                <div class="col-4"> </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s"></div>
            </div>
        @endif

    </div>
</div>



@include('includes._footer')

</body>
<script>
    var today = new Date();
    document.getElementById('out-date').innerText  = today;
</script>
</html>
