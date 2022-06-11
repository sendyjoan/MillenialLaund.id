@extends('layouts.app')

@section('content')

<!-- laravel login -->

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->




 <!--template luar login-->
 <!-- <main id="main" class="main-site left-sidebar">

<div class="container">
    <img src="" alt="">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/index" class="link">home</a></li>
            <li class="item-link"><a href="/login" class="link">Login</a></li>
            <li class="item-link"><a href="/register" class="link">Register</a></li>
            
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
            <div class=" main-content-area">
                <div class="wrap-login-item ">						
                    <div class="login-form form-item form-stl">
                        <form name="frm-login">
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Log in to your account</h3>										
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-uname">Email Address:</label>
                                <input type="text" id="frm-login-uname" name="email" placeholder="Type your email address">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-pass">Password:</label>
                                <input type="password" id="frm-login-pass" name="pass" placeholder="************">
                            </fieldset>
                            
                            <fieldset class="wrap-input">
                                <label class="remember-field">
                                    <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                                </label>
                                <a class="link-function left-position" href="#" title="Forgotten password?">Forgotten password?</a>
                            </fieldset>
                            <input type="submit" class="btn btn-submit" value="Login" name="submit">
                        </form>
                    </div>												
                </div>
            </div>	
        </div>
    </div>

</div>

</main> -->
<!--main area-->



<!-- Login bantuan rosisss -->
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-4">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                <div class="row">
                    <img class="col-lg-6 d-none d-lg-block" src="assets/images.png">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="col-md-10">
                                <center><h1 class="h3 text-gray-900 mb-4">Welcome</h1><center>
                            </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-md-10">
                                            <input id="username" 
                                                type="username" 
                                                class="form-control @error('username') is-invalid @enderror" 
                                                placeholder="Username"
                                                name="username" 
                                                value="{{ old('username') }}" 
                                                required autocomplete="username" autofocus
                                                style="border-radius: 30px; height: 45px;">

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">

                                        <div class="col-md-10">
                                            <input id="password" 
                                                type="password" 
                                                class="form-control @error('password') is-invalid @enderror" 
                                                placeholder="Password"
                                                name="password" 
                                                required autocomplete="current-password"
                                                style="border-radius: 30px; height: 45px;">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div style="margin-left: 1vh;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-10">
                                            <center><button type="submit" 
                                                class="btn btn-primary" 
                                                style="border-radius: 30px; width: 250px; height: 45px">
                                                {{ __('Login') }}
                                            </button><center>
                                            <hr>

                                            @if (Route::has('password.request'))
                                                <center><a href="{{ route('register') }}">
                                                    {{ __('Register') }}
                                                </a></center>
                                            @endif
                                        </div>
                                        <div class="col-md-10">
                                            <center><a href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
    </div>
</div>
@endsection
