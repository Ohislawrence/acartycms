@extends('layouts.guest')

@section('tittletop', $course->title )
@section('tittle', $course->title)
@section('description', $course->desc)
@section('image', asset('courseimages/'.$blog->banner)


@section('header')


@endsection

@section('footer')


@endsection




@section('body')

<!--page header section start-->
<section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('{{ asset('guest/assets/img/page-header-bg.svg') }}')no-repeat bottom left">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8 col-12">
                <div class="company-info-wrap">
                    <div class="company-logo p-4 bg-white shadow rounded-custom me-4 mt-2">
                        <div class="logo">
                            <img src="{{ asset('fav2.png') }}" alt="company logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="company-overview">
                        <h1 class="display-5 fw-bold">{{ $course->title }}</h1>

                        <h6>{{ $course->coursecat->title }}</h6>
                        <ul class="list-unstyled list-inline mb-0 mt-3">
                            <li class="list-inline-item me-4"><i class="far fa-house-building me-2"></i>Taught by {{ $course->user->name }}</li>
                            <li class="list-inline-item me-4">

                                <div class="star-rating">
                                    <i class="far fa-smile me-2"></i>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                    <span class="fas fa-star small text-warning"></span>
                                </div>
                            </li>
                            <li class="list-inline-item me-4"><i class="far fa-map-marker-alt me-2"></i>online
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <button type="button" class="btn btn-primary btn-xl">Enroll For Free</button>
            </div>
        </div>

        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>
<!--page header section end-->

<!--job details section start-->
<section class="job-details ptb-120">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 pe-lg-5">
                <div class="job-details-wrap">
                    <h2>About this Course</h2>
                    <p>{!! $course->desc !!}
                    </p>
                    <div class="job-details-info mt-5">
                        <h3 class="h5">What you will learn</h3>
                        <ul class="content-list list-unstyled">
                            <li>Be involved in every step of the product design cycle from discovery and user
                                acceptance testing.
                            </li>
                            <li>Work with BAs, product managers and tech teams to lead the Product Design</li>
                            <li>Maintain quality of the design process and ensure that when designs are translated
                                into code they accurately.
                            </li>
                            <li>Accurately estimate design tickets during planning sessions.</li>
                            <li>Contribute to sketching sessions involving non-designersCreate, and pattern
                                libraries.
                            </li>
                            <li>Design pixel perfect responsive UI’s and understand that adopting common interface
                            </li>
                            <li>Interface patterns is better for UX than reinventing the wheel</li>
                        </ul>
                    </div>
                    <div class="job-details-info mt-5">
                        <h3 class="h5">Skills</h3>
                        <ul class="content-list list-unstyled">
                            <li>Interactively plagiarize covalent "outside the box" thinking vis-a-vis.</li>
                            <li>Holisticly communicate integrated channels via backend interfaces. Authoritatively.
                            </li>
                            <li>Globally actualize effective processes through synergistic ROI. Interactively.</li>
                        </ul>
                    </div>

                    <!--our work process start-->
        <section class="work-process ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-10">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Syllabus</h4>
                            <h2>What you will learn from this course</h2>
                            <p>Enthusiastically engage cross-media leadership skills for alternative experiences.
                                Proactively drive vertical systems than intuitive architectures.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">

                    <div class="col-lg-12 col-md-12 order-0 order-lg-1">
                        <ul class="work-process-list list-unstyled">
                            <li class="d-flex align-items-start mb-4">

                                <div class="icon-content">
                                    <span class="text-primary h6">Step 1</span>
                                    <h3 class="h5 mb-2">Research and Content Planing</h3>
                                    <p>Progressively foster enterprise-wide systems whereas equity invested
                                        web-readiness harness installed base bandwidth.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">

                                <div class="icon-content">
                                    <span class="text-primary h6">Step 2</span>
                                    <h3 class="h5 mb-2">Publishing and Execution</h3>
                                    <p>Dramatically administrate progressive metrics without error-free globally simplify
                                        standardized alignments plagiarize distributed.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">

                                <div class="icon-content">
                                    <span class="text-primary h6">Step 3</span>
                                    <h3 class="h5 mb-2">Product Prototyping</h3>
                                    <p>Interactively whiteboard transparent testing procedures before
                                        bricks-and-clicks initiatives administrate competencies.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4 mb-lg-0">

                                <div class="icon-content">
                                    <span class="text-primary h6">Step 4</span>
                                    <h3 class="h5 mb-2">Deliver the Final Product</h3>
                                    <p>Dramatically plagiarize distributed progressive metrics without error-free globally simplify
                                        standardized alignments.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--our work process end-->

                    <img src="{{ asset('guest/assets/img/apply-now-1.jpg') }}" class="img-fluid mt-5 rounded-custom" alt="apply">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="job-overview-wrap bg-light p-5 sticky-sidebar rounded-custom mt-5 mt-lg-0">

                    <ul class="job-overview-list list-unstyled mt-4">
                        <li>
                            <i class="far fa-map-marker-alt text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Shareable Certificate</h6>
                                <span>Earn a Certificate upon completion</span>
                            </div>
                        </li>
                        <li>
                            <i class="far fa-user text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">100% online courses</h6>
                                <span>Start instantly and learn at your own schedule.</span>
                            </div>
                        </li>
                        <li>
                            <i class="far fa-clock text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Flexible Schedule</h6>
                                <span>Set and maintain flexible deadlines.</span>
                            </div>
                        </li>
                        <li>
                            <i class="far fa-history text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Duration</h6>
                                <span>25 hour</span>
                            </div>
                        </li>
                        <li>
                            <i class="far fa-wallet text-primary"></i>
                            <div class="overview-item">
                                <h6 class="mb-0">Cost</h6>
                                <span>₦ {{ $course->cost ? $course->cost : 'FREE' }}</span>
                            </div>
                        </li>
                    </ul>
                    <a href="contact-us.html" class="btn btn-primary d-block mt-5">Enroll For Free</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--job details section end-->

@endsection
