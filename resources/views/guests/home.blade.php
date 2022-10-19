@extends('layouts.guest')

@section('tittletop', 'Welcome')
@section('tittle', 'A 360 Ecommerce Solution for your business')
@section('description', 'We help you get your business up and running with our world-class eCommerce services from building your web store, teaching you and even give you a free platform to sell your eProducts.')
@section('image', 'https://acarty.com/guest/assets/img/screen/mac-screen.png')


@section('header')


@endsection

@section('footer')


@endsection




@section('body')
<!--hero section start-->
<section class="hero-section ptb-120" style="background: url('guest/assets/img/shape/dot-dot-wave-shape.svg')no-repeat bottom center">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-xl-5 col-lg-5">
                <div class="hero-content-wrap text-center text-xl-start text-lg-start" data-aos="fade-right">
                    <h1 class="fw-bold display-5">A 360 Ecommerce Solution for your business</h1>
                    <p class="lead">We help you get your business up and running with our world-class eCommerce services from building your web store, teaching you and even give you a free platform to sell your eProducts.</p>
                    <div class="hero-subscribe-form-wrap pt-4 position-relative m-auto m-xl-0 d-none d-md-block d-lg-block d-xl-block">
                        <a href="{{ route('servicerequest.page') }}" class="btn btn-primary me-3">Start Selling Online Now <i class="fas fa-arrow-right"></i></a>
                        <ul class="nav subscribe-feature-list mt-3">
                            <li class="nav-item">
                                <span class="ms-0"><i class="far fa-check-circle text-primary me-2"></i>Free consultation</span>
                            </li>
                            <li class="nav-item">
                                <span><i
                                        class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mt-4 mt-xl-0">
                <div class="hero-img-wrap position-relative" data-aos="fade-left">
                    <!--animated shape start-->
                    <ul class="position-absolute animate-element parallax-element shape-service hide-medium">
                        <li class="layer" data-depth="0.03">
                            <img src="{{ asset('guest/assets/img/color-shape/image-1.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-1">
                        </li>
                        <li class="layer" data-depth="0.02">
                            <img src="{{ asset('guest/assets/img/color-shape/feature-2.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-2 z-5">
                        </li>
                        <li class="layer" data-depth="0.03">
                            <img src="{{ asset('guest/assets/img/color-shape/feature-3.svg') }}" alt="shape" class="img-fluid position-absolute color-shape-3">
                        </li>
                    </ul>
                    <!--animated shape end-->
                    <div class="hero-img-wrap position-relative">
                        <div class="hero-screen-wrap">
                            <div class="phone-screen">
                                <img src="{{ asset('guest/assets/img/screen/phone-screen.png') }}" alt="hero image" class="position-relative img-fluid">
                            </div>
                            <div class="mac-screen">
                                <img src="{{ asset('guest/assets/img/screen/mac-screen.png') }}" alt="hero image" class="position-relative img-fluid rounded-custom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<!-- About Start -->
<section class="ptb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left text-lg-center mb-32 mb-lg-0">
                    <img src="{{ asset('guest/assets/img/acarty-home.png') }}" alt="" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <h4 class="text-primary h5 mb-3">Why Choose Us</h4>
                    <h2 class="mb-4">
                        You'll get over 10 years <br />
          experience in Ecommerce development
                    </h2>
                    <p>
                        Our people are experts in Ecommerce, having built over 100 eCommerce businesses across various sectors. We are an Agile team working remotely, from developers to project managers and domain experts; you are in safe hands.
                    </p>
                    <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                        <li class="py-1">
                            <div class="d-flex about-icon-box align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset('guest/assets/img/pie-chart.png') }}" alt="" />
                                </div>
                                <div>
                                    <h5>Expert around the world</h5>
                                </div>
                            </div>
                        </li>
                        <li class="py-1">
                            <div class="d-flex about-icon-box align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset('guest/assets/img/team.png') }}" alt="" />
                                </div>
                                <div>
                                    <h5>Best Practice For Business</h5>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <a href="{{ route('servicerequest.page') }}" class="link-with-icon text-decoration-none mt-3 btn btn-primary">
                        Start Your Store Now
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- app two customer review start -->
<section class="brand-logo ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">
                <div class="section-heading text-center">
                    <h2>Our partner</h2>
                    <p>We partner with top eCommerce providersaround the world to bring you only the best in the industry</p>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="brand-logo-grid list-unstyled">
                <li>
                    <img src="{{ asset('guest/assets/img/brand-logo/wooCommerce.png') }}" alt="woocommerce" />
                </li>
                <li>
                    <img src="{{ asset('guest/assets/img/brand-logo/shopify.png') }}" alt="shopify" />
                </li>
                <li>
                    <img src="{{ asset('guest/assets/img/brand-logo/laravel.png') }}" alt="laravel" />
                </li>
                <li>
                    <img src="{{ asset('guest/assets/img/brand-logo/alidropship.png') }}" alt="alidropship" />
                </li>

            </ul>
        </div>
    </div>
</section>
<!-- app two customer review end -->



<!-- app two feature three start -->
<section class="services-icon ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-heading text-center">
                    <h2>Services At Acarty</h2>
                    <p>
                       We cover every area of ecommerce, helping you reach your goal.
                    </p>
                </div>
                ,
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                    <div class="service-icon icon-center">
                        <img src="guest/assets/img/service/coding.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="service-info-wrap">
                        <h3 class="h5">eCommerce Dev. & Design</h3>
                        <p>
                            We use agile methodology to give the best custom apps, with technologies like PHP & Python to build solid backends(and APIs).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                    <div class="service-icon icon-center">
                        <img src="guest/assets/img/service/app-development.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="service-info-wrap">
                        <h3 class="h5">Online store setup</h3>
                        <p>
                            We work with Shopify, Woocommerce, BigCommerce and a host of other platform to make your shop easier to manager.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom">
                    <div class="service-icon icon-center">
                        <img src="guest/assets/img/service/shield.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="service-info-wrap">
                        <h3 class="h5">Dropshipping store setup</h3>
                        <p>
                            Your store can dropship products from around the world, it can be an addon to your store or the main product source.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center border-end">
                    <div class="service-icon icon-center">
                        <img src="guest/assets/img/service/curve.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="feature-info-wrap">
                        <h3 class="h5">Delivery app development</h3>
                        <p>
                            We help your with systems that delivers your products to your customers in an orderly manner.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center border-end">
                    <div class="service-icon icon-center">
                        <img src="guest/assets/img/service/graphic-design.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="feature-info-wrap">
                        <h3 class="h5">eCommerce courses</h3>
                        <p>
                            We have great courses that will teach you every thing you need to know about eCommerce from selling to delivery.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0">
                <div class="single-service p-lg-5 p-4 text-center">
                    <div class="service-icon icon-center">
                        <img src="guest/assets/img/service/promotion.png" alt="service icon" width="65" height="65" />
                    </div>
                    <div class="feature-info-wrap">
                        <h3 class="h5">Host & sell digital products</h3>
                        <p>
                            You can host and sell your eProducts like eBooks, coaching services and also Event Tickets & Training.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- app two feature three end -->





<!--Testimonial  start -->
<section class="testimonial-section bg-light ptb-120">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h4 class="h5">Testimonial</h4>
                    <h2>What Our Clients Say</h2>
                    <p>
                        We provide quality services and keep our clients happy while doing so because they are dear to us.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                    <div class="swiper testimonialThreeSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="p-4 bg-white rounded-custom position-relative shadow-sm">
                                    <p>
                                        I can not say enough great things about the team at Acarty Solutions!
                                        The creativity, the attention to details and the excellent communication sets
                                        them above the rest. I felt they genuinely cared about our business and took a
                                        personal interest in our success. It has been beyond a pleasure working with this team!
                                    </p>

                                    <div class="author d-flex">
                                        <div class="author-img me-3">
                                            <img src="guest/assets/img/testimonial/janet-emma.png" alt="janet-emma" class="rounded-circle" width="60" height="60" />
                                        </div>
                                        <div class="author-info">
                                            <h6 class="m-0">Janet Emma A.</h6>
                                            <span>Business Owner</span>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 bg-white rounded-custom position-relative shadow-sm">
                                    <p>
                                        Lawrence is super to work with. Positive and motivated, he made every
                                        effort to create a site that was more contemporary, mobile, and user-friendly.
                                        We are really pleased with the final product.
                                    </p>

                                    <div class="author d-flex">
                                        <div class="author-img me-3">
                                            <img src="guest/assets/img/testimonial/isi-johnny.png" alt="isi-johnny" class="rounded-circle" width="60" height="60" />
                                        </div>
                                        <div class="author-info">
                                            <h6 class="m-0">Isi Johnny</h6>
                                            <span>Fashion designer</span>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 bg-white rounded-custom position-relative shadow-sm">
                                    <p>
                                        We LOVE working with Acarty Solutions!
                                        They created and then revamped our ecommerce website as our business grew and matured.
                                        Every step of the process was smooth and the results are outstanding.
                                        We rely on their experience to guide our decisions and they
                                        have been 100% correct. They are responsive, efficient and so easy to work wit
                                    </p>

                                    <div class="author d-flex">
                                        <div class="author-img me-3">
                                            <img src="guest/assets/img/testimonial/peter.png" alt="peter" class="rounded-circle" width="60" height="60" />
                                        </div>
                                        <div class="author-info">
                                            <h6 class="m-0">Peter Orji</h6>
                                            <span>COO</span>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-button-next"></span>
                    <span class="swiper-button-prev"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial end -->

<!--Testimonial  price -->

<!-- Testimonial end -->



<!--blog section start-->
<section class="home-blog-section ptb-120 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center">
                    <h4 class="text-primary h5">Blog</h4>
                    <h2>Our Latest News and Update</h2>
                    <p>We keep you updated on the lately trends in the eCommerce industry. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs->take(3) as $blog )
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom mb-4 mb-lg-0">
                    <a href="{{ route('blogsingle.page', ['slug'=> $blog->slug]) }}" class="article-img">
                        <img src="{{ asset('blogimages/'.$blog->banner) }}" alt="article" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <div class="article-category mb-4 d-block">
                            <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">{{ $blog->cat->category }}</a>
                        </div>
                        <a href="{{ route('blogsingle.page', ['slug'=> $blog->slug]) }}">
                            <h2 class="h5 article-title limit-2-line-text">{{ $blog->title }}</h2>
                        </a>
                        <p class="limit-2-line-text">{{ $blog->desc }}</p>

                        <a href="javascript:;">
                            <div class="d-flex align-items-center pt-4">
                                <div class="avatar">
                                    <img src="{{ asset('fav2.png') }}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                </div>
                                <div class="avatar-info">
                                    <h6 class="mb-0 avatar-name">{{ $blog->user->name }}</h6>
                                    <span class="small fw-medium text-muted">{{$blog->created_at->format("M d,Y")}}</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="text-center mt-5">
                <a href="{{ route('blogs.page') }}" class="btn btn-primary">View Blogs</a>
            </div>
        </div>
    </div>
</section>
<!--blog section end-->


<!--cat subscribe start-->
<section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="subscribe-info-wrap text-center position-relative z-2">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-warning">Do you have eProducts to sell?</h4>
                        <h2>Sell Your eProducts for FREE Today!</h2>
                        <p>Sign up, upload your eProducts and share your product link everywhere.</p>
                    </div>
                    <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                        <a href="{{ route('sell.page') }}" class="btn btn-primary">Start Now</a>

                    </div>
                    <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <span><i class="far fa-check-circle text-primary me-2"></i>Create your product page</span>
                        </li>
                        <li class="nav-item">
                            <span><i class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                        </li>
                        <li class="nav-item">
                            <span><i class="far fa-check-circle text-primary me-2"></i>Withdraw anytime</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
    </div>
</section>
<!--cat subscribe end-->


<!--course section start-->
<section class="home-blog-section ptb-120 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center">
                    <h4 class="text-primary h5">Learn</h4>
                    <h2>Courses </h2>
                    <p>Learn ecommerce skills that will broaden your horizon and help you earn more. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($courses->take(3) as $course )
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom mb-4 mb-lg-0">
                    <a href="{{ route('learnsingle.page', ['slug'=> $course->slug]) }}" class="article-img">
                        <img src="{{ asset('courseimages/'.$course->image) }}" alt="article" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <div class="article-category mb-4 d-block">
                            <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">{{ $course->coursecat->title }}</a>
                        </div>
                        <a href="{{ route('learnsingle.page', ['slug'=> $course->slug]) }}">
                            <h2 class="h5 article-title limit-2-line-text">{{ $course->title }}</h2>
                        </a>

                        <a href="javascript:;">
                            <div class="d-flex align-items-center pt-4">
                                <div class="avatar">
                                    <img src="{{ asset('fav2.png') }}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                </div>
                                <div class="avatar-info">
                                    <h6 class="mb-0 avatar-name">{{ $course->user->name }}</h6>

                                </div>

                            </div>
                        </a>

                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="text-center mt-5">
                <a href="{{ route('learn.page') }}" class="btn btn-primary">View Courses</a>
            </div>
        </div>
    </div>
</section>
<!--course section end-->

@endsection
