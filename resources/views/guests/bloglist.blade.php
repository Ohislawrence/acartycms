@extends('layouts.guest')

@section('tittletop', 'Our Blogs')
@section('tittle', 'Get rich knowlegde that will help you in your business.')
@section('description', 'Home')
@section('image', 'Home')


@section('header')


@endsection

@section('footer')


@endsection




@section('body')
<!--page header section start-->
<section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('guest/assets/img/page-header-bg.svg')no-repeat center bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="section-heading text-center">
                    <h1 class="display-5 fw-bold">Our Latest News and Blogs</h1>
                    <p class="lead mb-0"><i>Withholding information is the essence of tyranny. </i></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-xl-8">
                @foreach ($blogs as $cat)
                <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">{{ $cat->cat->category }}</a>

                @endforeach
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>
<!--page header section end-->

<!--blog section start-->
<section class="masonary-blog-section ptb-120">
    <div class="container">

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom my-3">
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
                                    <img src="" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
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

        <!--pagination start-->
        <div class="row justify-content-center align-items-center mt-5">
            {!! $blogs->links() !!}
        </div>
        <!--pagination end-->
    </div>
</section>
<!--blog section end-->

@endsection
