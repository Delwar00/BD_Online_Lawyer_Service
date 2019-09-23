
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

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-1"></div>

        <div class="col-md-10">
            <div class="card" style="background-color:#efefef;padding:100px 150px 100px 150px;border-radius:5px">
              <h3>Sign up as Lawyer or as a Client</h3>
              <h3>
               {{-- {{  $user=DB::table('users')->where('status','=','1')->get() }} --}}

           </h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-8 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input placeholder="plaease Enter Your Email ??" style="padding:8px 10px;width:100%" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nid_number" class="col-md-8 col-form-label text-md-right">{{ __('Nid Number') }}</label>

                            <div class="col-md-12">
                                <input placeholder="plaease Enter Your Nid Number ??" style="padding:8px 10px;width:100%" type="text" class="{{ $errors->has('nid_number') ? ' is-invalid' : '' }}" name="nid_number" value="{{ old('nid_number') }}" required autofocus>

                                @if ($errors->has('nid_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nid_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-8 col-form-label text-md-right"><strong>{{__('Contact Number') }}</strong></label>
                            <div class="col-md-12 ">
                                <input placeholder="Please enter your 11 digits number??" style="padding:8px 10px;width:100%" type="text" class="{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
            							<div class="col-md-12"><strong>Your Role</strong><br>
            								<label class="radio-inline">
            									<input class="lol1" type="radio" name="status" value="1"> I'm a Lawyer
            								</label>
            								<label class="radio-inline">
            									<input class="lol" type="radio" name="status" value="2">I'm a Client
            								</label>
            							</div>
            						</div>

                        <div class="form-group row new">
                            <label for="ver_number" class="won col-md-8 col-form-label text-md-right">{{ __('Lawyer Verification Number(Ber Council)') }}</label>

                            <div class="col-md-12 main">
                                <input placeholder="plaease Enter Your 6 digits Verification Number ??" style="padding:8px 10px;width:100%" type="text" class="ver{{ $errors->has('ver_number') ? ' is-invalid' : '' }}" name="ver_number" value="{{ old('ver_number') }}">

                                @if ($errors->has('ver_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ver_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input placeholder="plaease Enter Your Password ??" style="padding:8px 10px;width:100%" id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input placeholder="plaease Enter Your Confirm Password ??" style="padding:8px 10px;width:100%;" id="password-confirm" type="password" class="" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button style="border-radius:0;padding:10px 40px" type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
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
<script>
jQuery(document).ready(function(){
	jQuery(".lol").click(function(){
    jQuery('.won').css('display', 'none');
    jQuery('.ver').attr('type','hidden');
	});
	jQuery(".lol1").click(function(){
		jQuery(".new").show(function(){
      jQuery('.won').css('display', 'block');
      jQuery('.ver').attr('type','text').appendTo('.main');
    });


	});

});
</script>

@yield('footer_scripts')
</body>
</html>
