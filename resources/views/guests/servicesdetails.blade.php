@extends('layouts.guest')

@section('tittletop', $details->service )
@section('tittle', $details->service)
@section('description', $details->desc)
@section('image', asset('serviceimages/'.$details->st1img))


@section('header')


@endsection

@section('footer')


@endsection




@section('body')


<!--feature section start-->
<section class="feature-section ptb-120">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-heading text-center mb-4">
                    <h5 class="h6 text-primary">Services Details</h5>
                    <h2>{{ $details->service }}</h2>
                    <p class="lead">{{ $details->desc }}</p>
                </div>
            </div>
        </div>
        <div class="row align-items-lg-center justify-content-between">
            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-4">
                    <h2>{{ $details->st1 }}</h2>
                    <p>{{ $details->st1desc }} </p>
                </div>
                <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5">
                    <a href="{{ route('servicerequest.page') }}" class="btn btn-primary me-3">Start Selling Online Now <i class="fas fa-arrow-right"></i></a>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="pr-lg-4 mt-md-4 position-relative">
                    <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                        <img src="{{ asset('serviceimages/'.$details->st1img) }}" alt="" class="img-fluid shadow-sm rounded-custom">
                        <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section end-->

<!--feature section start-->
<section class="feature-section pt-60 pb-120">
    <div class="container">
        <div class="row align-items-lg-center justify-content-between">
            <div class="col-lg-5 order-lg-1 mb-7 mb-lg-0">
                <div class="mb-4">
                    <h2>{{ $details->st2 }}</h2>
                    <p>{{ $details->st2desc }} </p>
                </div>
                <ul class="list-unstyled d-flex flex-wrap list-two-col mt-5">
                    <a href="{{ route('servicerequest.page') }}" class="btn btn-primary me-3">Start Selling Online Now <i class="fas fa-arrow-right"></i></a>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-2">
                <div class="pr-lg-4 position-relative">
                    <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                        <img src="{{ asset('serviceimages/'.$details->stimg) }}" alt="" class="img-fluid rounded-custom shadow-sm">
                        <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section end-->

<!--promo section start-->
<section class="promo-section ptb-120 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-heading text-center">
                    <h2>We understand you</h2>
                    <p>We have been helping people take their businesses online for over 10 years, you can trust us too. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-4">
                    <div class="promo-card-info">
                        <h3 class="display-5 fw-medium mb-4">150+</h3>
                        <h2 class="h5">Completed Projects</h2>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-4">
                    <div class="promo-card-info">
                        <h3 class="display-5 fw-medium mb-4">2.5k +</h3>
                        <h2 class="h5">Happy Client</h2>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="promo-card-wrap promo-border-hover border border-2 bg-white rounded-custom p-5 mb-4 mb-lg-0 mb-md-0">
                    <div class="promo-card-info">
                        <h3 class="display-5 fw-medium mb-4">100%</h3>
                        <h2 class="h5">Support</h2>
                        <p class="mb-0"> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--promo section end-->

@endsection
