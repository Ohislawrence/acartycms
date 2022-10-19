@extends('layouts.guest')

@section('tittletop', $blog->title )
@section('tittle', $blog->title)
@section('description', $blog->desc)
@section('image', asset('blogimages/'.$blog->banner))


@section('header')


@endsection

@section('footer')


@endsection




@section('body')


<section class="blog-details ptb-120">
    <div class="container">
        <div class="row justify-content-center">

            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <h1 class="fw-bold display-5">{{ $blog->title }}</h1>
                    <img src="{{ asset('blogimages/'.$blog->banner) }}" alt="article" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-lg-8 pe-lg-5">
                <div class="blog-details-wrap">
                    {!! $blog->desc !!}

                </div>
            </div>


            <div class="col-lg-4">
                <div class="author-wrap text-center bg-light p-5 sticky-sidebar rounded-custom mt-5 mt-lg-0">
                    <img src="{{ asset('fav2.png') }}" alt="author" width="120" class="img-fluid shadow-sm rounded-circle">
                    <div class="author-info my-4">
                        <h5 class="mb-0">{{ $blog->user->name }}</h5>
                        <span class="small">Ecommerce Specialist/ Wed Developer</span>
                    </div>
                    <p></p>
                    <ul class="list-unstyled author-social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--related blog start-->
    <section class="related-blog-list ptb-120 bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-12">
                    <div class="section-heading">
                        <h4 class="h5 text-primary">Related Posts</h4>
                        <h2>More Blogs</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0">
                        <a href="{{ route('blogs.page') }}" class="btn btn-primary">View All Posts</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs->take(3) as $related )
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="{{ route('blogsingle.page', ['slug'=> $related->slug]) }}" class="article-img">
                                <img src="{{ asset('blogimages/'.$related->banner) }}" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                                </div>
                                <a href="{{ route('blogsingle.page', ['slug'=> $related->slug]) }}">
                                    <h2 class="h5 article-title limit-2-line-text">{{ $related->title }}</h2>
                                </a>
                                <p class="limit-2-line-text">{{ $related->desc }}</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="{{ asset('fav2.png') }}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">{{ $related->user->name }}</h6>
                                            <span class="small fw-medium text-muted">{{$related->created_at->format("M d,Y")}}</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>
    <!--related blog end-->
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
</section>
<!--blog details section end-->
@endsection
