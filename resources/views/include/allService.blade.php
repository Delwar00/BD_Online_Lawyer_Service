@include('include.header')

  <aside style="background-image: url({{ asset('/websiteContent') }}/images/lawyer3.jpg);background-size:cover;background-position:100%;min-height:400px;padding-bottom:100px;">
  		<div class="container">

  			<div class="row">
  				<span style="color:white">Home || {{$service->service_name}}</span>
  				<div class="signup animate-box text-center col-md-12" style="padding-top:130px;">
  						<h2 style="color:white;font-size:40px;font-weight:bold;padding:0;margin:0">
                {{$service->service_name}} Related Lawyer</h2>
  <br>
  						<form  method="post" action="{{ url('/lawyer/service/search') }}">
                @csrf
  						 <div class="input-group" style='width:50%;margin:auto'>
  							 <select name="service_name"  class="data-search" style="border-color:white;padding:9px 10px">
                   <option >{{$service_search->prac_area}}</option>

  							 </select>
  									 <input style="padding:6px 10px" type="text" name="service_area" placeholder="Write Area??">
  									 {{-- <select name="service_area"  class="data-search" style="border-color:white;padding:9px 10px">
  									 	<option value="">{{$service_search->p_address}}</option>
  									 </select> --}}
                     <button class="btn btn-info data-search" style="border-radius:0">Find</button>
  									 {{-- <a href="business-lawyer.html" class="btn btn-primary data-search" style="border-radius:0">Submit</a> --}}
  						 </div>
  						 </form>
  				 </div>
  			</div>
  		</div>
  	</aside>

		  <div id="fh5co-practice" class="fh5co-bg-section" style="padding:70px 0">

		   <div class="container">
		     <div class="row animate-box">
		       <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="padding-bottom:0;margin-bottom:10px">
		         <h2>Top-rated lawyers near you</h2>
		         <p>Here is our all lawyers profile. They are always prepare to service our clients</p>
		       </div>
		     </div>
		     <div class="row">

		          @foreach ($search_info as $personal)
		            <div class="col-md-4 text-center animate-box" style="margin-top:25px">
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
		       {{-- {{ $search_info->links() }} --}}
		     </div>
		   </div>
		  </div>

  	<div id="fh5co-contact" style="background-color:white">
  		<div class="container">
  			<div class="row">
  				<h2 class="">View Business attorneys by City</h2>
  				<div class="col-md-3 ">
  					<a href="">Dhaka</a>  <br>
  					<a href="">Khulna</a>  <br>
  					<a href="">Barisal</a>  <br>
  					<a href="">Chittagong</a> <br>
  					<a href="">Rajshai</a>  <br>
  					<a href="">Rangpur</a>  <br>
  					<a href="">Mymensing</a> <br>
  					<a href="">Dinajpur</a>  <br>
  					<a href="#">Chittagong<a >  <br>
  					<a href="#">Khulna<a >  <br>
  					<a href="#">Rajshahi<a >  <br>
  						<a href="#">Par Naogaon<a ><br>
  						<a href="#">Pabna<a >  <br>
  						<a href="#">Paltan<a >  <br>
  						<a href="#">Tangail<a > <br>
  						<a href="#">Jamalpur<a >  <br>
  						<a href="#">Puthia<a >  <br>
  						<a href="#">Nawabganj<a > <br>
  					</div>
  					<div class="col-md-3 "
  					<a href="#">Comilla<a >  <br>
  					<a href="#">Shibganj<a >  <br>
  					<a href="#">Natore<a >  <br>
  					<a href="#">Rangpur<a >  <br>
  					<a href="#">Tungi<a >  <br>
  					<a href="#">Narsingdi<a >  <br>
  					<a href="#">Bagerhat<a >  <br>
  					<a href="#">Cox's Bazar<a >  <br>
  					<a href="#">Jessore<a >  <br>
  					<a href="#">Nagarpur<a >  <br>
  					<a href="#">Sylhet<a >  <br>
  					<a href="#">Mymensingh<a >  <br>
  					<a href="#">Narayanganj<a >  <br>
  					<a href="#">Bogra<a >  <br>
  					<a href="#">Dinajpur<a >  <br>
  					<a href="#">Barisal<a >  <br>
  					<a href="#">Saidpur<a >  <br>
  					 </div>
  					<div class="col-md-3">
  					<a href="#">Kushtia<a >  <br>
  					<a href="#">Sonargaon<a >  <br>
  					<a href="#">Satkhira<a >  <br>
  					<a href="#">Sirajganj<a >  <br>
  					<a href="#">Faridpur<a >  <br>
  					<a href="#">Sherpur<a >  <br>
  					<a href="#">Bhairab Bazar<a >  <br>
  					<a href="#">Shahzadpur<a >  <br>
  					<a href="#">Bhola<a >  <br>
  					<a href="#">Azimpur<a >  <br>
  					<a href="#">Kishorganj<a >  <br>
  					<a href="#">Bibir Hat<a >  <br>
  					<a href="#">Habiganj<a >  <br>
  					<a href="#">Madaripur<a >  <br>
  					<a href="#">Feni<a >  <br>
  					<a href="#">Laksham<a >  <br>
  					</div>
  					<div class="col-md-3">
  					<a href="#">Ishurdi<a >  <br>
  					<a href="#">Sarishabari<a >  <br>
  					<a href="#">Netrakona<a >  <br>
  					<a href="#">Joypur Hat<a >  <br>
  					<a href="#">Thakurgaon<a >  <br>
  					<a href="#">Palang<a >  <br>
  						</div>
  			</div>
  		</div>
  	</div>






<footer id="fh5co-footer" role="contentinfo">
  <div class="container">
    <div class="row row-pb-md">
      <div class="col-md-3 fh5co-widget">
        <h4>Attorney's Law</h4>
        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
      </div>
      <div class="col-md-3 col-md-push-1">
        <h4>Navigation</h4>
        <ul class="fh5co-footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Practice Areas</a></li>
          <li><a href="#">Won Cases</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">About us</a></li>
        </ul>
      </div>

      <div class="col-md-3 col-md-push-1">
        <h4>Contact Information</h4>
        <ul class="fh5co-footer-links">
          <li>298 West 21th Street, <br> Iskaton Road 721 Dhaka </li>
          <li><a href="">+ 01783220203</a></li>
          <li><a href="">wow.example000@gmail.com</a></li>
          <li><a href="">nobis000@gmail.com</a></li>
        </ul>
      </div>

      <div class="col-md-3 col-md-push-1">
        <h4>Opening Hours</h4>
        <ul class="fh5co-footer-links">
          <li>Mon - Thu: 9:00 - 21 00</li>
          <li>Fri 8:00 - 21 00</li>
          <li>Sat 9:30 - 15: 00</li>
        </ul>
      </div>

    </div>

    <div class="row copyright">
      <div class="col-md-12 text-center">
        <p>
          <small class="block">&copy; 2016 Free Online law Servicing Team. All Rights Reserved.</small>
          <small class="block">Designed by <a href="" target="_blank">Online law Servicing Team</a> </small>
        </p>
        <p>
          <ul class="fh5co-social-icons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
          </ul>
        </p>
      </div>
    </div>

  </div>
</footer>
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{ asset('/websiteContent') }}/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{ asset('/websiteContent') }}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/websiteContent') }}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{ asset('/websiteContent') }}/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="{{ asset('/websiteContent') }}/js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="{{ asset('/websiteContent') }}/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="{{ asset('/websiteContent') }}/js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="{{ asset('/websiteContent') }}/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="{{ asset('/websiteContent') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('/websiteContent') }}/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="{{ asset('/websiteContent') }}/js/main.js"></script>
<!---- Chart --->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script> --}}
<script src="{{ asset('/websiteContent') }}/js/chart.min.js"></script>

@yield('footer_scripts')
</body>
</html>
