@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="Phone" type="number" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}" required autocomplete="Phone" autofocus>

                                @error('Phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" required autocomplete="Address" autofocus>

                                @error('Address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->







<!--template luar-->
<!-- <main id="main" class="main-site left-sidebar">

<div class="container">

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
                    <div class="register-form form-item ">
                        <form class="form-stl" action="#" name="frm-login" method="get" >
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Create an account</h3>
                                <h4 class="form-subtitle">Personal infomation</h4>
                            </fieldset>				
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">ID</label>
                                <input type="email" id="frm-reg-email" name="reg-email" placeholder="ID">
                            </fieldset>					
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">Name</label>
                                <input type="text" id="frm-reg-lname" name="reg-lname" placeholder="name*">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Email Address*</label>
                                <input type="email" id="frm-reg-email" name="reg-email" placeholder="Email address">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Phone Number</label>
                                <input type="email" id="frm-reg-email" name="reg-email" placeholder="Phone  number">
                            </fieldset>
                            <fieldset class="wrap-functions ">
                                <label class="remember-field">
                                    <input name="newletter" id="new-letter" value="forever" type="checkbox"><span>Sign Up for Newsletter</span>
                                </label>
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half left-item ">
                                <label for="frm-reg-pass">Password *</label>
                                <input type="text" id="frm-reg-pass" name="reg-pass" placeholder="Password">
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half ">
                                <label for="frm-reg-cfpass">Confirm Password *</label>
                                <input type="text" id="frm-reg-cfpass" name="reg-cfpass" placeholder="Confirm Password">
                            </fieldset>
                            <input type="submit" class="btn btn-sign" value="Register" name="register">
                        </form>
                    </div>											
                </div>
            </div>	
        </div>
    </div>

</div>

</main> -->
<!--main area-->







<!-- dibantu rosisssss -->

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <img class="col-lg-6 d-none d-lg-block" src="assets/images.png">
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="col-md-10">
                        <center><h1 class="h3 text-gray-900 mb-4">Create an Account!</h1></center>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf



                        <div class="row mb-3">

                            <div class="col-md-10">
                                <input id="id" 
                                    type="number" 
                                    class="form-control @error('id') is-invalid @enderror" 
                                    placeholder="ID" 
                                    name="ID" 
                                    style="border-radius: 30px; height: 45px;">

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-10">
                                <input id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    placeholder="Name"
                                    name="name" value="{{ old('name') }}" 
                                    required autocomplete="name" autofocus
                                    style="border-radius: 30px; height: 45px;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                         <div class="row mb-3">

                            <div class="col-md-10">
                                <input id="address" 
                                    type="text" 
                                    class="form-control @error('address') is-invalid @enderror" 
                                    placeholder="Adress"
                                    name="address" value="{{ old('address') }}" 
                                    required autocomplete="address" autofocus
                                    style="border-radius: 30px; height: 45px;">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">

                            <div class="col-md-10">
                                <input id="phone" 
                                    type="number" 
                                    class="form-control @error('phone') is-invalid @enderror" 
                                    placeholder="+6285xxxxxz"
                                    name="phone" value="{{ old('phone') }}" 
                                    required autocomplete="phone" autofocus
                                    style="border-radius: 30px; height: 45px;">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-10">
                                <input id="email" 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    placeholder="xxx@gmail.com"
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required autocomplete="email"
                                    style="border-radius: 30px; height: 45px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-5 mb-3 mb-sm-0">
                                <input id="password" 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    placeholder="Password" 
                                    name="password" 
                                    required autocomplete="new-password"
                                    style="border-radius: 30px; height: 45px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-sm-5">
                                <input id="password-confirm" 
                                    type="password" 
                                    class="form-control" 
                                    placeholder="Password Confirm"
                                    name="password_confirmation" 
                                    required autocomplete="new-password"
                                    style="border-radius: 30px; height: 45px;">
                            </div>
                        </div><br>

                        <div class="row mb-0">
                            <div class="col-md-10">
                                <center><button type="submit" 
                                    class="btn btn-primary"
                                    style="border-radius: 30px; width: 250px; height: 45px" >
                                    {{ __('Register') }}
                                </button></center><br>
                            </div><hr>
                            <div class="col-md-10">
                                <center>
                                    <a href="{{ route('login') }}">{{ __('Already have an account? Login!') }}</a>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
