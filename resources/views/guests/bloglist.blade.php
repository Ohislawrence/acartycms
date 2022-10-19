@extends('layouts.guest')

@section('tittletop', 'Our Blogs')
@section('tittle', 'All Blogs')
@section('description', 'Get rich knowlegde that will help you in your business.')
@section('image', 'https://acarty.com/guest/assets/img/screen/mac-screen.png')


@section('header')


@endsection

@section('footer')


@endsection




@section('body')


<!--blog section start-->
<section class="masonary-blog-section ptb-120">
    <div class="container">
        <div class="row justify-content-center align-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-heading text-center mb-4">
                    <h5 class="h6 text-primary">Our Blogs</h5>
                    <h2>Acarty Blogs</h2>
                    <div class="row">
                    @foreach ($blogs as $blog )
                        <p>{{ $blog->cat->category }}</p>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

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

        <!--pagination start-->
        <div class="row justify-content-center align-items-center mt-5">
            {!! $blogs->links() !!}
        </div>
        <!--pagination end-->
    </div>
</section>
<!--blog section end-->

@endsection
