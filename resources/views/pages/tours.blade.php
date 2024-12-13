@extends('layout.layout')

@section('content')
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<section class="header-inner header-inner-menu bg-overlay-secondary">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 position-relative">
                <div class="header-inner-title">
                    <style>
                        .header-inner {
                            background-image: url("{{ asset('frontend/images/ha_giang.jpg') }}");
                        }
                    </style>
                    <div class="section-title">
                        <div class="sub-title">
                            <img class="img-fluid" src="{{ asset('frontend/images/title-icon.png') }}" alt="#">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-white text-uppercase" href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Tours</li>
                            </ol>
                        </div>
                        <h2 class="title text-white"><strong>Tours</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-inner-shape"></div>
</section>

<section class="space-ptb">
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-4">
                @include('pages.sidebar')
            </div>
            <div class="col-lg-8">
                <div class="row align-items-center mb-4">
                    <div class="col-lg-8">
                        <p class="mb-0">
                            Found {{ $tours->count() }} results
                        </p>
                    </div>
                </div>
                <div class="row tour__list">
                    @forelse($tours as $tour)
                        <div class="col-lg-6 col-md-6 mb-4 tour__info">
                            <div class="listing-item">
                                <div class="listing-image bg-overlay-half-bottom">
                                    <img class="img-fluid" 
                                       src="{{ asset('frontend/images/' . $tour->image) }}" alt="{{ $tour->title }}" 
                                         alt="{{ $tour->title }}" 
                                         style="height: 250px; object-fit: cover;"
                                          href="{{ route('tours.tour-detail', ['id' => $tour->id]) }}">
                                    <div class="listing-favourite listing-like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="listing-details">
                                    <h5 class="mb-0">
                                        <a href="{{ route('tours.tour-detail', ['id' => $tour->id]) }}" class="title mb-0">{{ $tour->title }}</a>
                                    </h5>
                                    <a href="#" class="listing-loaction text-capitalize">
                                        <i class="fa fa-location-dot"></i> {{ $tour->location }}
                                    </a>
                                    <div class="listing-rating d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="date me-3">
                                                <i class="fa-regular fa-calendar-days me-2"></i><span> {{ $tour->period }} </span>
                                            </div>
                                        </div>
                                        <div class="price tour__price">
                                            <span class="text-decoration-line-through"></span>{{ $tour->price }}
                                        </div>
                                    </div>
                                    <a href="{{ route('tours.tour-detail', ['id' => $tour->id]) }}" class="btn btn-link mt-2">More</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 text-center">
                            <p>No tours found. Please try adjusting your search criteria.</p>
                        </div>
                    @endforelse
                </div>
                @if($tours->count() > 0)
                    <div class="row mt-4">
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
