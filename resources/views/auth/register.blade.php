@extends('layouts.guest')

@section('tittletop', 'Register')
@section('tittle', 'Register')
@section('description', 'Register to a world of possibilities.')
@section('image', 'Home')


@section('header')


@endsection

@section('footer')


@endsection

@section('body')

<!--register section start-->
<section class="sign-up-in-section bg-dark ptb-60" style="background: url('{{ asset('guest/assets/img/page-header-bg.svg') }}')no-repeat right bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="pricing-content-wrap bg-custom-light rounded-custom shadow-lg">
                    <div class="price-feature-col pricing-feature-info text-white left-radius p-5 order-1 order-lg-0">
                        <a href="index.html" class="mb-5 d-none d-xl-block d-lg-block"><img src="{{ asset('acartylogo.png') }}" width="113px" alt="logo" class="img-fluid"></a>
                        <div class="customer-testimonial-wrap mt-60">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="testimonial-tab-1" role="tabpanel">
                                    <div class="testimonial-tab-content mb-4">
                                        <div class="mb-2">
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                        <blockquote>
                                            <h5>The Best Template You Got to Have it!{{ request()->user }}</h5>
                                            Globally network long-term high-impact schemas vis-a-vis distinctive
                                            e-commerce
                                            cross-media infrastructures rather than ethical sticky alignments rather
                                            than global.
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Joe Richard</h6>
                                            <span>Visual Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="testimonial-tab-2" role="tabpanel">
                                    <div class="testimonial-tab-content mb-4">
                                        <div class="mb-2">
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                        <blockquote>
                                            <h5>Amazing Quiety template!</h5>
                                            Distinctively engineer client-centered information and cooperative core
                                            competencies. Progressively customize client-centered repurpose viral
                                            e-services whereas before 24/7 total linkage.
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Oberoi R.</h6>
                                            <span class="small">CEO at Herbs</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="testimonial-tab-3" role="tabpanel">
                                    <div class="testimonial-tab-content mb-4">
                                        <div class="mb-2">
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fas fa-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                        <blockquote>
                                            <h5>Embarrassed by the First Version!</h5>
                                            Efficiently whiteboard cross-unit meta-services after bleeding-edge
                                            deliverables. Quickly transition standardized schemas via leveraged
                                            users. Assertively actualize mission-critical supply chains through .
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Joan Dho</h6>
                                            <span class="small">Founder and CTO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav testimonial-tab-list mt-5" id="nav-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" href="#testimonial-tab-1" data-bs-toggle="tab" data-bs-target="#testimonial-tab-1" role="tab" aria-selected="true">
                                        <img src="{{ asset('guest/assets/img/testimonial/1.jpg') }}" class="img-fluid rounded-circle" width="60" alt="user">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#testimonial-tab-2" data-bs-toggle="tab" data-bs-target="#testimonial-tab-2" role="tab" aria-selected="false">
                                        <img src="{{ asset('guest/assets/img/testimonial/2.jpg') }}" class="img-fluid rounded-circle" width="60" alt="user">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#testimonial-tab-3" data-bs-toggle="tab" data-bs-target="#testimonial-tab-3" role="tab" aria-selected="false">
                                        <img src="{{ asset('guest/assets/img/testimonial/3.jpg') }}" class="img-fluid rounded-circle" width="60" alt="user">
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="row justify-content-center mt-60">
                            <div class="col-12">
                                <p>Already trusted by some of the greatest companies</p>
                                <ul class="list-unstyled list-inline mb-0">
                                    <li class="list-inline-item">
                                        <img src="{{ asset('guest/assets/img/clients/client-logo-1.svg') }}" width="120" alt="clients logo" class="img-fluid py-3 me-3 customer-logo">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="{{ asset('guest/assets/img/clients/client-logo-2.svg') }}" width="120" alt="clients logo" class="img-fluid py-3 me-3 customer-logo">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="{{ asset('guest/assets/img/clients/client-logo-3.svg') }}" width="120" alt="clients logo" class="img-fluid py-3 me-3 customer-logo">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="{{ asset('guest/assets/img/clients/client-logo-4.svg') }}" width="120" alt="clients logo" class="img-fluid py-3 me-3 customer-logo">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="{{ asset('guest/assets/img/clients/client-logo-5.svg') }}" width="120" alt="clients logo" class="img-fluid py-3 me-3 customer-logo">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="{{ asset('guest/assets/img/clients/client-logo-6.svg') }}" width="120" alt="clients logo" class="img-fluid py-3 me-3 customer-logo">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="price-feature-col pricing-action-info p-5 right-radius bg-light order-0 order-lg-1">
                        <a href="index.html" class="mb-5 d-block d-xl-none d-lg-none"><img src="{{ asset('acartylogo.png') }}" width="113px" alt="logo" class="img-fluid"></a>
                        <h1 class="h3">Create an Account</h1>
                        <p class="text-muted">Get started with your free account today. No credit card needed and no
                            setup fees.</p>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="mt-5 register-form">
            @csrf
            <input type="hidden" name="userrole" value="{{ request()->user }}">
            <div class="row">
                <div class="col-sm-6">
                    <label for="name" class="mb-1">Name <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
        </div>

        <div class="col-sm-6 ">
            <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
            <div class="input-group mb-3">
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>
        </div>

        <div class="col-sm-12">
            <label for="company" class="mb-1">Busines Name</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Company" id="company" aria-label="company">
            </div>
        </div>

        <div class="col-sm-12">
            <label for="password" class="mb-1">Password <span
                    class="text-danger">*</span></label>
            <div class="input-group mb-3">
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>
        </div>

        <div class="col-sm-12">
            <label for="password" class="mb-1">{{ __('Confirm Password') }} <span
                    class="text-danger">*</span></label>
            <div class="input-group mb-3">
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif


                <div class="col-12">
                <x-jet-button class="btn btn-primary mt-4 d-block w-100">
                    {{ __('Register') }}
                </x-jet-button>
                </div>
            </div>
            <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                <span class="divider-bar"></span>
                <h6 class="position-absolute text-center divider-text bg-light mb-0">Or</h6>
            </div>
            <div class="action-btns">
                <a href="#" class="btn google-btn mt-4 d-block bg-white shadow-sm d-flex align-items-center text-decoration-none justify-content-center">
                    <img src="{{ asset('guest/assets/img/google-icon.svg') }}" alt="google" class="me-3">
                    <span>Sign up with Google</span>
                </a>
            </div>
            <p class="text-center text-muted mt-4 mb-0 fw-medium font-monospace">Already have an
                account? <a href="{{ route('login') }}" class="text-decoration-none">Sign in</a></p>
        </form>
    </div>
</div>
</div>
</div>
</div>
</section>

        @endsection
