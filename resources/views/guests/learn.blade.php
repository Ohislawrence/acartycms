@extends('layouts.guest')

@section('tittletop', 'Learn')
@section('tittle', 'Take our courses and increase your profit.')
@section('description', 'Home')
@section('image', 'Home')


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
                    <h5 class="h6 text-primary">Our Courses</h5>
                    <h2>Ecommerce Courses</h2>
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-8">
                            @foreach ($courses as $course)
                            <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">{{ $course->coursecat->title }}</a>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6">
                <div class="single-article rounded-custom my-3">
                    <a href="{{ route('learnsingle.page', ['slug'=> $course->slug]) }}" class="article-img">
                        <img src="{{ asset('courseimages/'.$course->image) }}" alt="article" class="img-fluid">
                    </a>
                    <div class="article-content p-4">
                        <div class="article-category mb-4 d-block">
                            <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">{{ $course->coursecat->title }}</a>
                            <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">$ {{ $course->cost }}</a>
                        </div>
                        <a href="{{ route('learnsingle.page', ['slug'=> $course->slug]) }}">
                            <h2 class="h5 article-title limit-2-line-text">{{ $course->title }}</h2>
                        </a>
                        <p class="limit-2-line-text">{{ $course->desc }}</p>

                        <a href="javascript:;">
                            <div class="d-flex align-items-center pt-4">
                                <div class="avatar">
                                    <img src="{{ asset('fav2.png') }}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                </div>
                                <div class="avatar-info">
                                    <h6 class="mb-0 avatar-name">Acarty</h6>
                                    <span class="small fw-medium text-muted">{{ $course->user->name }}</span>
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
            {!! $courses->links() !!}
        </div>
        <!--pagination end-->
    </div>
</section>
<!--blog section end-->

@endsection
