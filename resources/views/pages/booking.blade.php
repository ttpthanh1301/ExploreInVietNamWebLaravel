@extends('layout.layout')
@section('content')
<section class="header-inner header-inner-menu bg-overlay-secondary">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 position-relative">
                <div class="header-inner-title">
                    <div class="section-title">
                        <div class="sub-title">
                            <img class="img-fluid" src="../images/title-icon.png" alt="#">
                            <span></span>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-white text-uppercase" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Tour Details</li>
                            </ol>
                        </div>
                        <h2 class="title text-white"><strong>Tour Details</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .header-inner-menu {
            background-image: url("{{asset('frontend/images/sapa.jpg')}}");
        }
        .header-inner-shape {
            background-image: url("{{ asset('frontend/images/bg/02.png') }}");
        }
        .space-ptb.booking__info {
            background-image: url("{{ asset('frontend/images/destination/01.png') }}");
        }
    </style>
    <div class="header-inner-shape"></div>
</section>
<section class="space-ptb booking__info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="section-title mb-5 text-center">
                    <div class="sub-title justify-content-center">
                        <img class="img-fluid" src="{{ asset('frontend/images/title-icon.png') }}" alt="#">
                        <span>Your Choice</span>
                    </div>
                    <h2 class="title"><strong>{{ $tour->title }}</strong></h2>
                    <div class="description">
                        <p>All your personal information will be protected with utmost confidentiality.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-11">
                <form class="row booking-02 bg-white" id="bookingForm" method="POST" action="{{ route('booking.store') }}">
                    @csrf <!-- CSRF bảo mật -->
                    <!-- Hidden Tour ID -->
                    <input type="hidden" name="tour_id" value="{{ $tour->id }}">

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Your name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">Phone number:</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label class="form-label">Number of people:</label>
                        <input type="number" class="form-control" name="quantity" min="1" required>
                    </div>
                    <div class="col-12 mt-4 text-center">
                        <button type="submit" class="btn btn-secondary tour__confirm">Book tour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
