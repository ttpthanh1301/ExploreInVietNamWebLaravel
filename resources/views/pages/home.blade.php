@extends('layout.layout')
@section('content')
<style>
    .banner {
        background-image: url("{{ asset('frontend/images/ha_giang.jpg') }}");
    }
</style>
<section class="banner banner-1 bg-holder position-relative">
    <div class="shape-02"><img class="img-fluid" src="{{ asset('frontend/images/home-01/02.png') }}" alt="#"></div>
    <div class="shape-03"><img class="img-fluid" src="{{ asset('frontend/images/home-01/03.png') }}" alt="#"></div>
    <div class="shape-04"><img class="img-fluid" src="{{ asset('frontend/images/home-01/04.png') }}" alt="#"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="position-relative text-center mb-5">
                    <h1 class="text-white text-start">HAVE A NICE TRIP</h1>
                    <h2 class="text-white text-start fw-bold">
                        Time to rest has arrived. Let’s enjoy this wonderful moment together.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">

            </div>
        </div>
        <div class="header-inner-shape" style="background-image: url('../images/bg/02.png');"></div>
    </div>
</section>
<section class="categories-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-nav-center feature-categories-2" data-nav-dots="false" data-nav-arrow="true"
                    data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1"
                    data-xx-items="1" data-space="0" data-autoheight="false">
                    <div class="item">
                        <div class="feature-categories">
                            <div class="icon">
                                <object type="image/svg+xml" data="{{ asset('frontend/images/svg/beach.svg') }}" class="icon "></object>
                            </div>
                            <h6 class="mb-0 title"><a href="#"> Beach</a></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-categories">
                            <div class="icon">
                                <object type="image/svg+xml" data="{{ asset('frontend/images/svg/heritage.svg') }}" class="icon "></object>
                            </div>
                            <h6 class="mb-0 title"><a href="#"> Historical Sites</a></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-categories">
                            <div class="icon">
                                <object type="image/svg+xml" data="{{ asset('frontend/images/svg/honeymoon.svg') }}" class="icon "></object>
                            </div>
                            <h6 class="mb-0 title"><a href="#"> Honeymoon </a></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-categories">
                            <div class="icon">
                                <object type="image/svg+xml" data="{{ asset('frontend/images/svg/adventure.svg') }}" class="icon "></object>
                            </div>
                            <h6 class="mb-0 title"><a href="#"> Adventure </a></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-categories">
                            <div class="icon">
                                <object type="image/svg+xml" data="{{ asset('frontend/images/svg/beaches.svg') }}" class="icon "></object>
                            </div>
                            <h6 class="mb-0 title"><a href="#"> camping </a></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feature-categories">
                            <div class="icon">
                                <object type="image/svg+xml" data="{{ asset('frontend/images/svg/family.svg') }}" class="icon "></object>
                            </div>
                            <h6 class="mb-0 title"><a href="#"> Family </a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-ptb about-02">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 mb-5 mb-lg-0">
                <div class="section-title">
                    <div class="sub-title"><img class="img-fluid" src="../images/title-icon.png" alt="#"><span>Discover</span>
                    </div>
                    <h2 class="title">Explore <strong>Travel</strong></h2>
                    <div class="description mb-0 mb-lg-5">
                        <p>Let your own journey be your biggest adventure! Immerse yourself in new experiences, discover
                            nature's beauty, and enjoy unforgettable moments. Don't let life pass you by without leaving lasting
                            memories. Start your journey now!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">`
                        <ul class="list list-unstyled">
                            <li><i class="fa fa-check"></i>Immerse yourself in new experiences: Discover new lands, languages,
                                and cultures that broaden your horizons and create unforgettable memories.</li>
                            <li><i class="fa fa-check"></i>Develop yourself: Facing challenges and new experiences during travel
                                will help you develop life skills and become more adaptable.</li>
                            <li><i class="fa fa-check"></i>Connect and unite: Traveling helps expand your international network,
                                provides opportunities to connect with new people, and builds respect for diversity.</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <!-- <div class="col-xl-4 col-lg-5 col-md-4 col-sm-5">
                  <a href="about-us.html" class="btn btn-primary">Read More</a>
                </div> -->
                    <div class="col-xl-8 col-lg-7 col-md-8 col-sm-7 mt-4 mt-sm-0 ">
                        <div class="call-box">
                            <div class="call-box-icon">
                                <i class="fa-solid me-2 fa-phone-volume"></i>
                            </div>
                            <div class="call-box-content">
                                <p class="small">For any questions, please contact us via:</p>
                                <span class="text-secondary fw-bold">+(84) 886-88-1076</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="about-img">
                    <div class="img-01 text-center">
                        <img class="img-fluid" src="{{ asset('frontend/images/about/03.png') }}" alt="">
                    </div>
                    <div class=" img-02">
                        <img class="img-fluid" src="{{ asset('frontend/images/about/02.png') }}" alt="">
                    </div>
                    <h2 class="title-travel">Travel</h2>
                    <div class="owl-carousel owl-nav-center feature-categories-2" data-nav-dots="true" data-nav-arrow="false"
                        data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0"
                        data-autoheight="true">
                        <div class="item">
                            <div class="feature-categories">
                                <div class="icon">
                                    <object type="image/svg+xml" data="{{ asset('frontend/images/svg/beach.svg') }}"></object>
                                </div>
                                <h6 class="mb-0 title"><a href="#"> Beach </a></h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-categories">
                                <div class="icon">
                                    <object type="image/svg+xml" data="{{ asset('frontend/images/svg/heritage.svg') }}"></object>
                                </div>
                                <h6 class="mb-0 title"><a href="#"> Historical Sites </a></h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-categories">
                                <div class="icon">
                                    <object type="image/svg+xml" data="{{ asset('frontend/images/svg/adventure.svg') }}"></object>
                                </div>
                                <h6 class="mb-0 title"><a href="#"> Adventure</a></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="site-section" id="products-section">
    <div class="container">
        <div class="text-center">
            <h3 class="section-sub-title">Popular Tours</h3>
            <h2 class="section-title mb-3">Our Tours</h2>
            <p>Discover the beauty of Vietnam with our exclusive tours. Immerse yourself in the culture, landscapes, and vibrant atmosphere of each destination.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($tours->random(3) as $tour)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('frontend/images/' . $tour->image) }}" alt="{{ $tour->title }}"  class="card-img-top" style="height: 250px; object-fit: cover;">

                    <div class="card-body">
                        <h5 class="card-title"><a href="#" class="text-decoration-none">{{ $tour->title }}</a></h5>
                        <div class="mb-3">
                            <span class="meta-icons me-3"><i class="fa-solid fa-star text-warning me-1"></i> 5.0</span>
                            <span class="meta-icons wishlist"><i class="fa-solid fa-heart me-1"></i> 45</span>
                        </div>
                        <p class="card-text">{{ Str::limit($tour->description, 200) }} ..etc</p>
                        <p class="card-text"><strong>Period: </strong>{{ $tour->period }}</p>
                         <p class="card-text"><strong>Price </strong>{{ $tour->price }}</p>
                        <a href="{{ route('booking', ['id' => $tour->id]) }}" class="btn btn-primary">Book Now</a>
                         <a href="{{ route('tours.tour-detail', ['id' => $tour->id]) }}" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="site-section space-ptb about-02" id="testimonials-section">
    <div class="container">
        <!-- Section Title -->
        <div class="mb-5 text-center">
            <h3 class="section-sub-title text-uppercase font-weight-bold text-muted">What Our Guests Say</h3>
            <h2 class="section-title mb-3" style="font-size: 40px; font-weight: 900;">Customer Testimonials</h2>
        </div>

        <!-- Testimonials Slider (using Bootstrap Carousel) -->
        <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <!-- First Testimonial (active) -->
                <div class="carousel-item active">
                    <div class="testimonial text-center">
                        <figure class="mb-4 d-flex justify-content-center mx-auto">
                            <img src="{{ asset('frontend/images/person_3.jpg') }}" alt="John Smith" class="img-fluid rounded-circle mb-3" style="max-width: 200px;">
                        </figure>
                        <blockquote class="mb-3">
                            <p>&ldquo;The tour was absolutely amazing! The guides were knowledgeable, and the sights were breathtaking. We had such a great time exploring new places and meeting new people. Highly recommend this tour!&rdquo;</p>
                        </blockquote>
                        <p class="text-black"><strong>John Smith</strong></p>
                    </div>
                </div>

                <!-- Second Testimonial -->
                <div class="carousel-item">
                    <div class="testimonial text-center">
                        <figure class="mb-4 d-flex justify-content-center mx-auto">
                            <img src="{{ asset('frontend/images/person_4.jpg') }}" alt="Jane Doe" class="img-fluid rounded-circle mb-3" style="max-width: 200px;">
                        </figure>
                        <blockquote class="mb-3">
                            <p>&ldquo;The experience was unforgettable! We learned so much and had a fantastic time with the group. I would definitely go on this tour again!&rdquo;</p>
                        </blockquote>
                        <p class="text-black"><strong>Jane Doe</strong></p>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
 <section class="space-ptb about-02 site-section">
    <div class="container" id="blog-section">
        <div class="text-center mb-5">
            <h3 class="section-sub-title">Blog</h3>
            <h2 class="section-title mb-3">Travel Blog Posts</h2>
        </div>

        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="h-entry">
                    <img src="{{ asset( strpos($post->image, 'public/') === 0 ? substr($post->image, 7) : $post->image) }}" alt="Image" class="img-fluid">
                    <h2 class="font-size-regular">
                        <a href="{{ route('blog-detail', ['slug' => $post->slug]) }}" class="text-black">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <div class="meta mb-4">{{ $post->author }} <span class="mx-2">&bullet;</span> {{ $post->created_at->format('M d, Y') }} <span class="mx-2">&bullet;</span> <a href="#" style="color: #3dd1d5;">Travel</a></div>
                    <p>{{ Str::limit($post->content, 150) }}</p>
                    <p><a href="{{ route('blog-detail', ['slug' => $post->slug]) }}" style="color: #3dd1d5;">Continue Reading...</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    </div>
</section>


<div class="contact-section" id="contact-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <div class="mb-5">
                    <h3 class="section-sub-title">Contact Form</h3>
                    <h2 class="section-title mb-3">Book Your Tour</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-5">
                <form action="#" class="p-5 bg-white">
                    <h2 class="h4 text-black mb-5">Booking Information</h2>
                    <!-- Full Name, Email, and Phone Number in one row -->
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="fullName" class="text-black font-weight-bold">Full Name</label>
                            <input type="text" id="fullName" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="text-black font-weight-bold">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone" class="text-black font-weight-bold">Phone Number</label>
                            <input type="tel" id="phone" class="form-control" required>
                        </div>
                    </div>
                    <!-- Address and Notes in one row -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address" class="text-black font-weight-bold">Address</label>
                            <input type="text" id="address" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="notes" class="text-black font-weight-bold">Notes</label>
                            <textarea id="notes" class="form-control" rows="2" placeholder="Enter any special requests..." required></textarea>
                        </div>
                    </div>
                    <!-- Passengers Info -->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="adults" class="text-black font-weight-bold">Adults</label>
                            <input type="number" id="adults" class="form-control" min="1" value="1" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="children" class="text-black font-weight-bold">Children (5-11)</label>
                            <input type="number" id="children" class="form-control" min="0" value="0">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="youngChildren" class="text-black font-weight-bold">Young Children (2-5)</label>
                            <input type="number" id="youngChildren" class="form-control" min="0" value="0">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="infants" class="text-black font-weight-bold">Infants (Under 2)</label>
                            <input type="number" id="infants" class="form-control" min="0" value="0">
                        </div>
                    </div>
                    <!-- Visa & Single Room Surcharge -->
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="visaSurcharge" class="text-black font-weight-bold">Visa Surcharge</label>
                            <select id="visaSurcharge" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="numberVisas" class="text-black font-weight-bold">Number of Visas</label>
                            <input type="number" id="numberVisas" class="form-control" min="0" value="0">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="singleRoomSurcharge" class="text-black font-weight-bold">Single Room Surcharge</label>
                            <select id="singleRoomSurcharge" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="numberSingleRooms" class="text-black font-weight-bold">Number of Single Rooms</label>
                            <input type="number" id="numberSingleRooms" class="form-control" min="0" value="0">
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group">
                        <input type="submit" value="Submit Booking" class="btn btn-dark py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.location.hash === '#blog-section') {
            const section = document.getElementById('blog-section');
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
</script>
@endsection