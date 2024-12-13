@extends('layout.layout')
@section('content')
<!-- Success Message Section -->
<section class="space-ptb booking__success" style="background-image: url('../images/destination/01.png');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title mb-4 text-center">
                    <div class="sub-title"><img class="img-fluid" src="../images/title-icon.png" alt="#"><span>Tour bạn đặt</span></div>
                    <h2 class="title"><strong>Hoa Lư - Tam Cốc - Múa Cave 1 Day Trip</strong></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="booking-03 box-shadow">
                    <h2 class="mb-3">Thank you</h2>
                    <div class="success-message mb-4">
                        <p class="text-success mb-0">You have successfully booked a tour. We will contact you as soon as possible.</p>
                    </div>
                    <h4 class="mb-4">Information</h4>
                    <div class="booking-info">
                        <div class="d-flex flex-wrap">
                            <div class="time-card d-flex align-items-center me-3 mb-3">
                                <object type="image/svg+xml" data="images/svg/calendar.svg" class="icon"></object>
                                <p class="mb-0 booking__datein"><span class="text-secondary">Departure date: 17/12/2024</span> </p>
                            </div>
                            <div class="time-card d-flex align-items-center me-3 mb-3">
                                <object type="image/svg+xml" data="images/svg/on-time.svg" class="icon"></object>
                                <p class="mb-0 booking__dateout"><span class="text-secondary">Duration: 3 days 2 nights </span> </p>
                            </div>
                            <div class="time-card d-flex align-items-center me-3 mb-3">
                                <object type="image/svg+xml" data="images/svg/user.svg" class="icon"></object>
                                <p class="mb-0 booking__quantity"><span class="text-secondary">Number of people: 4</span> </p>
                            </div>
                            <div class="time-card d-flex align-items-center mb-3">
                                <object type="image/svg+xml" data="images/svg/map-location.svg" class="icon"></object>
                                <p class="mb-0 booking__address"><span class="text-secondary">Pickup point: </span> </p>
                            </div>
                        </div>
                        <hr>
                        <div class="coupon d-sm-flex align-items-center justify-content-between pt-4">
                            <div class="fw-bold">Total: <span class="text-primary booking__price">8.000.000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="booking-btn d-flex">
                    <a href="tour-search.html" class="btn btn-primary">See more tours</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection