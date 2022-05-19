@extends('layouts.app')
@section('content')
    <div class="page-wrapper full-page"
        style="background: url('https://gergeltelecomsolutions.be/images/slide1.jpg'); background-size: cover; background-position: center">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-7 col-xl-4 mx-auto">
                    <div class="card">


                        <div class="auth-form-wrapper px-4 py-5">
                            <img class="" style="text-align: center; margin:0 auto;" class="img-responsive"
                                src="{{ asset('images/icons/logo.jpg') }}" alt="">
                            <h5 class=" mt-3 text-muted font-weight-normal mb-4">Welcome back to GTS! Log in to your
                                account.</h5>
                            <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                        {{ __('Login') }}</button>
                                    {{-- <button type="button" --}}
                                    {{-- class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0"> --}}
                                    {{-- <i class="btn-icon-prepend" data-feather="twitter"></i> --}}
                                    {{-- Login with twitter --}}
                                    {{-- </button> --}}
                                </div>
                                {{-- <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> --}}
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
