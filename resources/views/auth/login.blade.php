@extends('layouts.guest')

@section('tittletop', 'Login')
@section('tittle', 'Login')
@section('description', 'Login to a world of possibilities.')
@section('image', 'Home')


@section('header')


@endsection

@section('footer')


@endsection

@section('body')

<section class="sign-up-in-section bg-dark ptb-60" style="background: url('{{ asset('guest/assets/img/page-header-bg.svg') }}')no-repeat right bottom">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-8 col-12">
                <a href="index.html" class="mb-4 d-block text-center"><img src="{{ asset('acartylogo.png') }}" width="113px" alt="logo" class="img-fluid"></a>
                <div class="register-wrap p-5 bg-light shadow rounded-custom">
                    <h1 class="h3">Nice to Seeing You Again</h1>
                    <p class="text-muted">Please log in to access your account web-enabled methods of innovative
                        niches.</p>

                    <div class="action-btns">
                        <a href="#" class="btn google-btn bg-white shadow-sm mt-4 d-block d-flex align-items-center text-decoration-none justify-content-center">
                            <img src="{{ asset('guest/assets/img/google-icon.svg') }}" alt="google" class="me-3">
                            <span>Connect with Google</span>
                        </a>
                    </div>
                    <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                        <span class="divider-bar"></span>
                        <h6 class="position-absolute text-center divider-text bg-light mb-0">Or</h6>
                    </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="mt-4 register-form">
            @csrf

            <div class="row">
                <div class="col-sm-12">
                    <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>
                </div>

                <div class="col-sm-12">
                    <label for="password" class="mb-1">{{ __('Password') }} <span
                            class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>
                </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <div class="col-12">
                <x-jet-button class="btn btn-primary mt-3 d-block w-100">
                    {{ __('Log in') }}
                </x-jet-button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>
    @endsection
