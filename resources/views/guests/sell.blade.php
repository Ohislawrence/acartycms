@extends('layouts.guest')

@section('tittletop', 'Sell eProduct')
@section('tittle', 'Sell your eProducts on Acarty for FREE')
@section('description', 'Home')
@section('image', 'Home')


@section('header')


@endsection

@section('footer')


@endsection




@section('body')
<!-- app two feature two start -->
<section class="app-two-feature-two pt-60 pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 col-xl-6 col-md-12">
                <div class="app-two-feature-two-img">
                    <img src="guest/assets/img/app-two-feature-phone-with-shape.png" alt="feature image" class="img-fluid" />
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="app-two-feature-two-right">
                    <div class="feature-content-wrap">
                        <h4 class="h6">Best Features</h4>
                        <h2>Boost up your Phone in just one click</h2>
                        <p>
                            Completely evolve orthogonal sources via cooperative data. Dynamically promote high standards in resources after timely catalysts for alignments and visionary quality vectors.
                        </p>
                    </div>
                    <div class="app-two-feature-two-content">
                        <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4">
                            <li class="py-1">
                                <i class="fad fa-check-circle me-2"></i>Based on Bootstrap Grid
                            </li>
                            <li class="py-1">
                                <i class="fad fa-check-circle me-2"></i>Online Learning
                            </li>
                            <li class="py-1">
                                <i class="fad fa-check-circle me-2"></i>Track your spending
                            </li>
                            <li class="py-1">
                                <i class="fad fa-check-circle me-2"></i>Unlimited Download
                            </li>
                            <li class="py-1">
                                <i class="fad fa-check-circle me-2"></i>Responisve Design
                            </li>
                            <li class="py-1">
                                <i class="fad fa-check-circle me-2"></i> Always Be in Touch
                            </li>
                        </ul>
                        <div class="action-btns mt-5">
                            <a href="{{ route('register', ['role'=> 'seller']) }}" class="btn app-two-btn">Learn About More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- app two feature two end -->
<!--feature promo section start-->
<section class="feature-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h4 class="text-primary h5">Build Quality</h4>
                    <h2>Our Special Features</h2>
                    <p>Authoritatively underwhelm excellent methodologies
                        via premium expertise competitive than open-source
                        imperatives disseminate. </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="position-relative" data-aos="fade-up" data-aos-delay="50">
                    <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0 z-2">
                        <div class="feature-icon d-inline-block bg-primary-soft rounded-circle mb-32">
                            <i class="fad fa-shield-alt text-primary fa-2x"></i>
                        </div>
                        <h3 class="h5">Quality First</h3>
                        <p class="mb-0">Professionally integrate high standards applications before user friendly leadership skills.</p>
                    </div>
                    <!--pattern start-->
                    <div class="dot-shape-bg position-absolute z--1 left--40 top--40">
                        <img src="guest/assets/img/shape/dot-big-square.svg" alt="shape">
                    </div>
                    <!--pattern end-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0 mt-md-0">
                        <div class="feature-icon d-inline-block bg-danger-soft rounded-circle mb-32">
                            <i class="fad fa-comment-alt-smile text-danger fa-2x"></i>
                        </div>
                        <h3 class="h5">Communication</h3>
                        <p class="mb-0">Professionally integrate high standards applications before user friendly leadership skills.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="position-relative" data-aos="fade-up" data-aos-delay="150">
                    <div class="cta-card rounded-custom text-center custom-shadow p-5 bg-white mt-4 mt-lg-0">
                        <div class="feature-icon d-inline-block bg-success-soft rounded-circle mb-32">
                            <i class="fad fa-grin-stars text-success fa-2x"></i>
                        </div>
                        <h3 class="h5">Reliability</h3>
                        <p class="mb-0">Professionally integrate high standards applications before user friendly leadership skills.</p>
                    </div>
                    <!--pattern start-->
                    <div class="dot-shape-bg position-absolute z--1 right--40 bottom--40">
                        <img src="guest/assets/img/shape/dot-big-square.svg" alt="shape">
                    </div>
                    <!--pattern end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature promo section end-->

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
                        <a href="contact-us.html" class="btn btn-primary">Start Now</a>

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

</div>
<!--style guide block end-->

@endsection
