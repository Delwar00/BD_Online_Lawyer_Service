@include('include.header')

  <div class="bg-index-area" style="background-image: url({{ asset('/websiteContent') }}/images/1.jpg);background-size:cover;background-position:100%;min-height:500px;padding-bottom:100px;">
  		<div class="container ">
  			<div class="col-md-8 animate-box" style="padding-top:140px">
  				<div class="slider-text-inner desc">
  					<h2 class="heading-section" style="color:white">Hire Experienced lawyers quickly.</h2>
  					<p class="fh5co-lead ">Find a lawyer</p>
  					 <form method="post" action="{{ url('/lawyer/search') }}" >
               @csrf
  					 <div class="input-group" >

      						 <select name="service_name" class="data-search" style="border-color:white;padding:9px 10px">
                     <option>Select Services</option>
                     @foreach ($search_info as $search)
                       <option>{{ $search}}</option>
                     @endforeach

      						 </select>
  								 <select name="service_area" class="data-search" style="border-color:white;padding:9px 10px">
                     <option>Select Your Area</option>
                     @foreach ($search_area as $search)
                       <option>{{ $search }}</option>
                     @endforeach
  								 </select>
                   <button class="btn btn-info data-search" style="border-radius:0">Find</button>

  					 </div>
  					 </form>
  				</div>

  			</div>
  			<div class="col-md-4 text-center animate-box" style="padding-top:140px">
  				<div class="slider-text-inner desc" >
  					<div>
  						<a style="padding:10px 10px;border-bottom:1px solid white;border-radius:0;" class="col-md-12 btn btn-info" href="{{ url('/complain') }}">Ask A Question</a><br><br>
  						<a style="padding:10px 10px;border-bottom:1px solid white;border-radius:0;" class="col-md-12 btn btn-info" href="{{ url('/talk/to/lawyer') }}">Talk To Lawyer</a><br><br>

  						<a style="padding:10px 10px;border-bottom:1px solid white;border-radius:0;" class="col-md-12 btn btn-info" href="">Top Rated Lawyers</a><br><br>
  					 </div>

  				</div>
  			</div>
  		 </div>
   </div>
  @include('include.lawyerprofile')

   <div id="fh5co-counter" class="fh5co-counters fh5co-bg-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-3 text-center animate-box">
   					<span class="icon"><i class="icon-user"></i></span>
   					<span style="color:white" class="fh5co-counter js-counter" data-from="0" data-to="27539" data-speed="5000" data-refresh-interval="50"></span>
   					<span style="color:white" class="fh5co-counter-label" style="color:white">Satisfied Clients</span>
   				</div>
   				<div class="col-md-3 text-center animate-box">
   					<span class="icon"><i class="icon-speech-bubble"></i></span>
   					<span style="color:white" class="fh5co-counter js-counter" data-from="0" data-to="23563" data-speed="5000" data-refresh-interval="50"></span>
   					<span style="color:white" class="fh5co-counter-label">Cases Won</span>
   				</div>
   				<div class="col-md-3 text-center animate-box">
   					<span class="icon"><i class="icon-trophy"></i></span>
   					<span style="color:white" class="fh5co-counter js-counter" data-from="0" data-to="{{ $client_count }}" data-speed="5000" data-refresh-interval="50"></span>
   					<span style="color:white" class="fh5co-counter-label">Clients</span>
   				</div>
   				<div class="col-md-3 text-center animate-box">
   					<span class="icon"><i class="icon-users"></i></span>
   					<span style="color:white"class="fh5co-counter js-counter" data-from="0" data-to="{{ $lawyer_count }}" data-speed="5000" data-refresh-interval="50"></span>
   					<span style="color:white"class="fh5co-counter-label">Lawyers</span>
   				</div>
   			</div>
   		</div>
   	</div>

  @include('include.footer')
  @yield('footer_scripts')
