@extends('layout.layout')
@section('content')
<!--=================================
    Header -->
<header class="header header-sticky default"></header>
<!--=================================
      Header -->
<!--=================================
      Search -->
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!--=================================
      Search -->
<!--=================================
      Header Inner -->
<section class="header-inner header-inner-menu bg-overlay-secondary"
    style="background-image: url('{{ asset('frontend/images/ha_giang.jpg') }}');">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 position-relative">
                <div class="header-inner-title">
                    <div class="section-title">
                        <div class="sub-title"><img class="img-fluid" src="{{ asset('frontend/images/title-icon.png') }}" alt="#">
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
    <div class="header-inner-shape" style="background-image: url('images/bg/02.png');"></div>
</section>
<!--=================================
      Header Inner -->
<!--=================================
      Tour Grid -->
<section class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg- col-md-12">
                <div class="listing-item listing-item-details">
                    <div class="listing-details">
                        <div class="listing-title d-flex justify-content-between mb-4">
                            <h4 class="mb-0"><a class="title mb-0" href="{{ route('tours.tour-detail', ['id' => $tour->id]) }}">{{ $tour->title }}</a></h4>
                        </div>
                        <div class="listing-rating row d-flex justify-content-between align-items-center">
                            <div class="col-lg-7">
                                <div class="d-sm-flex align-items-center">
                                    <div class="date me-3 mb-3 mb-sm-0">
                                        <i class="fa-regular fa-calendar-days me-2"></i><span>{{ $tour->period }} </span>
                                    </div>
                                    <div class="rating mb-3 mb-sm-0">
                                        <i class="fa-solid fa-star me-1 text-yellow"></i><span>4.3 / 5</span>
                                    </div>
                                    <a class="listing-loaction ms-sm-4"><i class="fa fa-location-dot"></i>Departure: <strong>{{ $tour->location}}</strong></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="d-sm-flex align-items-center ms-auto justify-content-lg-end">
                                    <div class="price me-sm-4 mb-3 mb-sm-0">
                                        <h5 class="fw-600">{{ $tour->price}}</h5>
                                    </div>
                                    <a href="{{ route('booking', ['id' => $tour->id]) }}" class="btn btn-primary"><i class="fa-solid fa-circle-check fa-xl me-2"></i>
                                        Book now!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                                    <div class="row">
                        <div class="col-md-8">
                            <div class="listing-detail-page">
                                <div class="listing-detail-box">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid"   src="{{ asset('frontend/images/' . $tour->image) }}" alt="{{ $tour->title }}" style="min-width: 100%;">
                                    </div>
                                    <div class="mt-4 tour__detail">
                                        <div class="detail-title">
                                            <h5 class="fw-600">Description</h5>
                                        </div>
                                        <p>
                                            {{ str_replace([$included, $excluded, 'TOUR INCLUDED:', 'TOUR EXCLUDED:'], '', $tour->description) }}
                                        </p>
                                        <h4>TOUR INCLUDED:</h4>
                                        <p>{!! nl2br(e($included)) !!}</p>
                                        <h4>TOUR EXCLUDED:</h4>
                                        <p>{!! nl2br(e($excluded)) !!}</p>
                                    </div>

                                    <div class="listing-detail-box">
                                        <div class="detail-title">
                                            <h5 class="fw-600">Schedule</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="accordion" id="accordionExample">
                                                    @foreach(explode('|', $tour->schedule) as $item)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="heading{{ $loop->index }}">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse{{ $loop->index }}" aria-expanded="false" aria-controls="collapse{{ $loop->index }}">
                                                                    {{ $item }}
                                                                </button>
                                                            </h2>
                                                            <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    {{ $item }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>              

        <div class="col-md-4">
            @include('pages.sidebar')
        </div>

@php
    $reviews = [
        ['name' => 'John Doe', 'review' => 'A wonderful experience! The scenery was breathtaking and the guide was very knowledgeable. I enjoyed kayaking around the islands and the sunset party was the highlight of the day.'],
        ['name' => 'Mary Smith', 'review' => 'I had a fantastic day! The tour guide was friendly and informative. The caves and Titov Island were stunning, and the whole experience was seamless. Worth every penny!'],
        ['name' => 'David Johnson', 'review' => 'The whole experience was top-notch! From the luxurious transfer to the scenic views, everything was well-organized. I loved the kayaking activity and had a great time swimming in the crystal-clear waters.'],
        ['name' => 'Sophia Brown', 'review' => 'This was a trip of a lifetime! The activities were fun, the food was excellent, and the views were out of this world. I highly recommend this tour for anyone looking for a memorable adventure.'],
        ['name' => 'Emily Davis', 'review' => 'The scenery was absolutely breathtaking! The tour guide was knowledgeable and friendly, and the kayaking activity was a great way to explore the islands.'],
    ];
    $randomReviews = array_rand($reviews, rand(3, 5));
@endphp

<div class="container">
    <div class="row gy-4">
        <div class="col-md-8">
            <div class="row ">
                
                @foreach ($randomReviews as $key)
                    <div class="col-md-12">
                        <div class="p-4 border border-radius-sm">
                            <div class="d-flex align-items-center">
                                <h6 class="mt-0">{{ $reviews[$key]['name'] }}</h6>
                            </div>
                            <p class="mb-0">{{ $reviews[$key]['review'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

