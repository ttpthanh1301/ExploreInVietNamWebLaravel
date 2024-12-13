@extends('layout.layout')

@section('content')
<section class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-item listing-item-details">
                    <div class="listing-details">
                        <div class="listing-title d-flex justify-content-between mb-4">
                            <h4 class="mb-0">{{ $blog->title }}</h4>
                        </div>
                    </div>
                    <div class="listing-favourite mt-4">
                        <a href="#" class="btn btn-light btn-md me-2 me-lg-3 mb-3"><i class="fa-solid fa-download me-2"></i>Save</a>
                        <a href="#" class="btn btn-light btn-md me-2 me-lg-3 mb-3"><i class="fa-solid fa-bookmark me-2"></i>Bookmark</a>
                        <a href="#" class="btn btn-light btn-md me-2 me-lg-3 mb-3"><i class="fa-solid fa-note-sticky me-2"></i>Write a review</a>
                        <a href="#" class="btn btn-light btn-md me-2 me-lg-3 mb-3"><i class="fa-solid fa-share-nodes me-2"></i>Share</a>
                        <a href="#" class="btn btn-light btn-md me-2 me-lg-3 mb-3"><i class="fa-solid fa-receipt me-2"></i>Report</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="listing-detail-page">
                            <div class="listing-detail-box">
                                <!-- Hiển thị ảnh blog -->
                                @if ($blog->image)
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="{{ asset( strpos($blog->image, 'public/') === 0 ? substr($blog->image, 7) : $blog->image) }}" style="min-width: 100%; height: auto;">

                                    </div> 
                                @else
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="{{ asset('frontend/images/default-image.jpg') }}" alt="Default Image" style="min-width: 100%; height: auto;">
                                    </div>
                                @endif

                                <div class="mt-4 tour__detail">
                                    <div class="detail-title">
                                        <h5 class="fw-600">Description</h5>
                                    </div>
                                    <p>{{ $blog->content }}</p>
                                </div>
                            </div>

                            <!-- Review Section -->
                            <div class="listing-detail-box reviews-box">
                                <div class="detail-title">
                                    <h5 class="fw-600">5 reviews</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-block d-md-flex mb-4">
                                            <div class="p-4 border border-radius-sm ms-0 ms-md-3">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mt-0">Alice Williams</h6>
                                                    <div class="d-flex ms-auto mb-3">
                                                        <i class="fa-solid fa-star text-yellow"></i>
                                                        <i class="fa-solid fa-star text-yellow"></i>
                                                        <i class="fa-solid fa-star text-yellow"></i>
                                                        <i class="fa-solid fa-star text-yellow"></i>
                                                        <i class="fa-solid fa-star text-yellow"></i>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                                        <div class="col-lg-4">
                    @include('pages.sidebar')
                                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
