
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


  <div id="fh5co-practice" class="fh5co-bg-section" style="padding:70px 0;background:white;">

   <div class="container">

     <div class="row">

          @foreach ($personal_info as $personal)
            <div class="col-md-4 text-center animate-box" style="margin-top:25px;">
           <div class="panel panel-body" style="padding:15px 0 0 0;border-radius:0;border:0;margin-bottom:0;background:#f0f9f89e">
             <span class="icon">
               <i>
                 <a href="{{ url('/lawyer/view') }}/{{$personal->id}}">
                   <img class="img-circle" style="width:150px;height:150px" src="{{asset('/storage')}}/{{$personal->profile_photo}}" alt="">
                 </a>
               </i>
             </span>
             <div class="blog-text">
               <div class="paragraph padding-left-20">
                 <div id="rateBox3"></div>
             </div>
             <span style="color:#47B7D9;font-size:30px">*****</span><br>
                 <a style="color:black;" href="profile.html"><span> {{ $personal->l_name }} <span style="color:red">{{ $personal->price }}</span>
                     <i style="color:green;background:green;font-size:10px;border-radius:5px" class="icon-circle">

                     </i>
                 </span></a>
               <h5><a href="#">Practics Area : <span style="color:black">{{ $personal->prac_area }}</span></a></h5>

             <p style="padding:2px 30px;text-align:justify">{{ str_limit($personal->details),5 }}</p>

             </div>
           </div>
           <div class="lol col-md-12">
             <div class="row">
                 <div class="col-md-6" style="padding:0">
                   <a href="{{ url('/lawyer/hired/submit') }}/{{ $personal->id }}" class="btn btn-primary" style="background:#46B7D9;border:0;border-radius:0;width:100%;">Hired</a>

                 </div>
                 <div class="col-md-6" style="padding:0">
                     <a href="{{ url('/lawyer/message/submit') }}/{{ $personal->id }}" class="btn btn-info" style="border:0;border-radius:0;width:100%;">Message</a>
                 </div>
              </div>
           </div>
           </div>
          @endforeach

     </div>
     <div class="col-md-4"></div>

     <br>
     <div style="width:30%;margin:auto">
       {{-- {{ $personal_info->links() }} --}}
     </div>
   </div>
  </div>

@include('include.footer')
