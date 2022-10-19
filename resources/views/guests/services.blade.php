@extends('layouts.guest')

@section('tittletop', 'Our services')
@section('tittle', 'We are here you help you achieve your goals.')
@section('description', 'We are the ecommerce Experts')
@section('image', 'https://acarty.com/guest/assets/img/acarty-home.png')


@section('header')


@endsection

@section('footer')


@endsection




@section('body')

<!--features grid section start-->
<section class="feature-section bg-light ptb-120">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-heading text-center mb-4">
                    <h5 class="h6 text-primary">services</h5>
                    <h2>We are the ecommerce Experts</h2>
                    <p class="lead"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="feature-grid">
                    @foreach ( $services as $service )


                    <div class="feature-card bg-white shadow-sm rounded-custom p-5">
                        <div class="icon-box d-inline-block rounded-circle bg-success-soft mb-32">
                            <i class="fal fa-file-chart-line icon-sm text-success"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="h5">{{ $service->service }}</h3>
                            <p class="mb-0">{{$service->desc}}</p>
                        </div>
                        <a href="{{ route('servicedetails.page', $service->slug )}}" class="link-with-icon text-decoration-none mt-3">View Details <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--features grid section end-->

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

@endsection
