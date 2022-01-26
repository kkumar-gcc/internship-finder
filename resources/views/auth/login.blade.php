@extends('layouts.app')
@section('styleLink')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
    {{-- <div class="container"> --}}

    <div class="login-container">
        <div class="login-image">
            <img src="./illustration2.svg" alt="notify">
        </div>
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" placeholder="Email" id="email" class="@error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" placeholder="Password" id="password" class="@error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <!-- <input type="checkbox" name="remember_me" id="remember_me">
                                            <label for="remember_me"> Remember me</label> -->
                <button class="submit-btn" type="submit"> {{ __('Login') }}</button>



                <!-- <span>don't have an account, <a href="#">Register</a></span> -->

            </form>
            <div class="register-forgot">
                <span><a href="myForm.html" class="register">Register now</a></span>
                <span><a href="" class="forgot">Forgot password?</a></span>
            </div>
            <h3><span>or</span></h3>

            <div class="login-button-container">
                <div class="login-button">
                    <button class="login-btn login-btn-facebook">Login with Facebook</button>
                </div>
                <div class="login-button">
                    <button class="login-btn login-btn-twitter">login with Twitter</button>
                </div>
                <div class="login-button">
                    <button class="login-btn login-btn-google">Login with Google</button>
                </div>
            </div>
        </div>
    </div>
@endsection
