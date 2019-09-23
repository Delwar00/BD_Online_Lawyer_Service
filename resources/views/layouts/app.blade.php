<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Online Law Servicing') }}</title>
    <link href="{{ asset('/contents') }}/css/bootstrap.min.css" rel="stylesheet">
  	<link href="{{ asset('/contents') }}/css/font-awesome.min.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    /*sidebar code start*/
    .sidebar{
    	background-color:#222d32;
    	min-height:1000px;
    	margin:0px;
    	padding:0px;
    	}

    .sidebar_user{
    	text-align:center;
    	padding-bottom:20px;
    	border-bottom:1px solid #000;
    	}

    .sidebar_user img{
    	width:80px;
    	height:80px;
    	border-radius:50%;
    	border:2px solid #666;
    	margin:20px auto 5px;
    	}

    .sidebar_user h4{
    	color:#CCC;
    	margin-bottom:2px;
    	}

    .sidebar_user p{
    	color:#CCC;
    	font-size:14px;
    	font-weight:bold;
    	}

    .sidebar_user p i{
    	color:#090;
    	}

    .menu{

    	}

    .menu h2{
    	font-size:15px;
    	margin:0px;
    	padding:0px;
    	text-align:center;
    	background-color:#1b222a;
    	display:block;
    	line-height:40px;
    	border-bottom:1px solid #000;
    	color:#999;
    	}

    .menu ul{

    	}

    .menu ul li {

    	}

    .menu ul li a{
    	font-size:18px;
    	border-bottom:1px solid #000;
    	line-height:40px!important;
    	display:block;
    	padding-left:20px;
    	color:#ccc;
    	outline:0px;
    	}

    .menu ul li:last-child a{
    	border-bottom:0px;
    	}

    .menu ul li a:hover{
    	text-decoration:none;
    	outline:0px;
    	}

    .content{
    	margin:0px;
    	padding:0px;
    	}

</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background:#3a80a7;margin-bottom:0">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white;padding-top:15px;font-size:17px">
                    {{ config('app.name', 'Online Law Servicing') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" >
                                <a style="color:white;font-size:17px" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->id }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @auth
        <main class="sidebar" style="background:#34495e;width:20%;float:left">
                	<div class="sidebar_user">
                    	<img src="{{asset('images/avatar.png')}}" alt="user" class="img-responsive"/>
                    	<h4>  {{ Auth::user()->email }}</h4>
                        <p><i class="fa fa-circle"></i> online</p>
                    </div>
                    <div class="menu">
                    	<h2>MAIN NAVIGATION</h2>
                        <ul>
                        	<li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        @if (Auth::user()->status == 1) {
                              <li><a href="{{ url('/update/profile') }}"><i class="fa fa-user"></i> Additional Info Add</a></li>

                              <li><a href="{{ url('/lawyer/message/view') }}"><i class="fa fa-image"></i>Client Messages</a></li>
                          }
                        @else{
                                <li><a href="{{ url('/client/message/view') }}"><i class="fa fa-user"></i> Message View</a></li>
                          }
                        @endif



                        </ul>
                    </div>
              </main>
            @endauth
        <main class="py-4" style="width:80%;overflow:hidden">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('/contents') }}/js/jquery-1.11.1.min.js"></script>
  	<script src="{{ asset('/contents') }}/js/bootstrap.min.js"></script>
    @yield('footer_scripts')
</body>
</html>
