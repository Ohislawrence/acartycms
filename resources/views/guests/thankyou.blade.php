@extends('layouts.guest')

@section('tittletop', 'Thank you')
@section('tittle', 'Your request has been received')
@section('description', 'We will contact you as soon as posible.')
@section('image', )


@section('header')


@endsection

@section('footer')


@endsection




@section('body')

<!--register section start-->
<section class="contact-us ptb-120 position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-xl-12 col-lg-12 col-md-12 order-0 order-lg-1">
                <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
                    <h3 class="fw-medium h4">Your project request has been received, we will reach out to you ASAP. </h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5" style="background: url('guest/assets/img/shape/dot-dot-wave-shape.svg')no-repeat center top">
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
    </div>
</section>
<!--register section end-->

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
                                    <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
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

@endsection
