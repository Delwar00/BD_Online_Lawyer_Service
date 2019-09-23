
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>online law Servicing</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/animate.css">
	<!-- ratting -->
	 <link rel="stylesheet" href="{{ asset('/websiteContent') }}/fxss-rate/rate.css" />
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('/websiteContent') }}/css/style.css">
	<!-- Modernizr JS -->
	<script src="{{ asset('/websiteContent') }}/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<div class="fh5co-loader"></div>
	<div id="page">
	<nav class="fh5co-nav" role="navigation" style="background-color:#efefef;">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<a class="navbar-brand" href="{{ url('/') }}">
								{{-- {{ config('app.name', 'Online Law Servicing') }} --}}
								<img style="height:40px;width:70px" src="{{ asset('/websiteContent') }}/images/logo1.JPG" alt="">
						</a>
					</div>
					<div class="col-xs-8 text-right menu-1" >
						<ul >
							<li ><a  href="{{ url('/') }}">Home</a></li>

							{{-- <li><a href="about.html">About</a></li> --}}
							<li><a  href="{{ url('/complain') }}">Help Center</a></li>
            <li class="nav-item dropdown">
							{{-- @if (Auth::user())
			            logout

						@else --}}
							<a href="{{ url('/login') }}"  >
								Login
							</a>

            </li>
									<li class="nav-item dropdown">
										<a href="{{ url('/register') }}" >
											Membership
										</a>
									</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

<br><br><br>
<div class="container" >
    <div class="col-md-1"></div>
    <div class="row justify-content-center">
        <div class="col-md-10" style="background-color:#efefef;padding:100px 150px 100px 150px;border-radius:5px">
            <div class="card">
                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input style="padding:8px 10px;width:100%" id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="padding:8px 10px;width:100%" id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button style="border-radius:0;padding:10px 40px" type="submit" class="btn btn-success">
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
</div>
<br><br><br>
@include('include.footer')
