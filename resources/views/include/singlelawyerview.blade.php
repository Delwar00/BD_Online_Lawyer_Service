@include('include.header')

<aside id="fh5co-hero-profile" class="js-fullheight-profile" >
  <div class="flexslider-profile js-fullheight-profile" style="background-color:#796868;height:100%">
      <div class="container">
        <div class="row">
          <br><br><br>
          <div class="col-md-3 animate-box" style="margin:0;padding:0;">
            <div class="text-center animate-box">
           <div class="panel panel-body" style="padding:15px 0 0 0;border-radius:0;border:0;margin-bottom:0;">
             <span class="icon">
               <i>
                 <a href=""><img class="img-circle" style="width:150px;height:150px" src="{{asset('/storage')}}/{{$lawyerPersonalInfo->profile_photo}}" alt=""></a>
               </i>
             </span>
             <div class="blog-text">
               <div class="paragraph padding-left-20">
                 <div id="rateBox3"></div>
             </div>
                 <a style="color:black" href="profile.html"><span>{{ $lawyerPersonalInfo->l_name }}
                     <i style="color:green;background:green;font-size:10px;border-radius:5px" class="icon-circle">

                     </i>
                 </span></a>
               <h5><a href="#">Practics Area : <span style="color:black">{{ $lawyerPracticsInfo->prac_area }}</span></a></h5>
             <p style="padding:2px 30px;text-align:justify">{{ str_limit($lawyerPersonalInfo->details),12 }}</p>

             </div>
           </div>
           <div class="lol col-md-12">
             <div class="row">
                 <div class="col-md-12" style="padding:0">
                   <a href="{{ url('/lawyer/hired/submit') }}/{{ $lawyerPersonalInfo->id }}" class="btn btn-primary" style="background:#46B7D9;border:0;border-radius:0;width:100%;">Hired</a>

                 </div>
                 <div class="col-md-12" style="padding:0">
                     <a href="{{ url('/lawyer/message/submit') }}/{{ $lawyerPersonalInfo->id }}" class="btn btn-success" style="border:0;border-radius:0;width:100%;">Message</a>
                 </div>
              </div>
           </div>
           <div class="text-center">
									<span class="icon-circle"></span>
									<h2>Reviews</h2>
									<span>1500</span>
									<div class="panel panel-primary animate-box" style="border:0">
										<h4 style="border-top:1px solid gray;padding-top:10px">Abdul Bari</h4
										<p>Thank You very Much</p>
										<p style="padding-top:10px">29/01/2019 <span style="color:red">*****</span></p>
									</div>
									<div class="panel panel-primary animate-box" style="border:0">
										<h4 style="border-top:1px solid gray;padding-top:10px">Abdul Bari</h4
										<p>Thank You very Much</p>
										<p style="padding-top:10px">29/01/2019 <span style="color:red">*****</span></p>
									</div>
									<div class="panel panel-primary animate-box" style="border:0">
										<h4 style="border-top:1px solid gray;padding-top:10px">Abdul Bari</h4
										<p>Thank You very Much</p>
										<p style="padding-top:10px">29/01/2019 <span style="color:red">*****</span></p>
									</div>
									<div class="panel panel-primary animate-box" style="border:0">
										<h4 style="border-top:1px solid gray;padding-top:10px">Abdul Bari</h4
										<p>Thank You very Much</p>
										<p style="padding-top:10px">29/01/2019 <span style="color:red">*****</span></p>
									</div>
									<div class="panel panel-primary animate-box" style="border:0">
										<h4 style="border-top:1px solid gray;padding-top:10px">Abdul Bari</h4
										<p>Thank You very Much</p>
										<p style="padding-top:10px">29/01/2019 <span style="color:red">*****</span></p>
									</div>

							 </div>
							 <a href="" class"btn btn-primary ">View more</a>
           </div>


            <br> <br>

          </div>
          <div class="col-md-9" style="margin-right:0;padding-right:0;">
                <div class="profile" style="background:white;margin-right:2px;padding:0 10px;">
                  <nav class="fh5co-nav animate-box" role="navigation">
                    <div class="top-menu col-md-12">
                          <div class="col-xs-10 text-right menu-1">
                            <ul>
                              <li><a href="">Degress</a></li>
                              <li><a href="#qualify">Qualifications</a></li>
                              <li class="active"><a href="#contact">Contact</a></li>
                              <li><a href="#similar">Similar Lawyers</a></li>
                            </ul>
                      </div>
                    </div>
                  </nav>
                  <div class="about" id="qualify" style="padding-bottom:16px">
                        <h2>Degres</h2>
                        <p>{{ $lawyerPersonalInfo->highest_degree }}</p>

                        {{-- chart  --}}
                        <h2>Practics Area</h2>
                        {{-- <canvas id="myChart"></canvas> --}}
                        <div id="app">
                             {!! $chart->container() !!}
                         </div>
                         {!! $chart->script() !!}

                        <br>
                         <h2>Experience & Qualifications</h2>
                         <p>{{ $lawyerPersonalInfo->qualifications }}</p>
                   </div>

                </div>

          </div>
          <div class="col-md-3"></div>
          <div class="col-md-9" style="padding-right:0;margin-top:16px">
            <div class="profile" style="background:white;margin-right:2px;padding:0 10px;overflow:hidden">
            <div class="contact" id="contact" style="padding:16px 0;">
                  <h2>Address</h2>
                  <p class="btn btn-success" style="border-radius:0">{{ $lawyerAddressInfo->p_address }}</p>
                  <h2>Office Address</h2>
                  <p class="btn btn-success" style="border-radius:0">{{ $lawyerAddressInfo->o_address }}</p>
                  {{-- <nav class="fh5co-nav" role="navigation">
                    <div class="top-menu col-md-12">
                      <div class="col-xs-10  menu-">
                        <ul>
                          <li style="padding:4px 10px;background:black"><a style="color:white" href="#qualify" > <span class="icon-phone"></span> 0178384849 /</a></li>
                          <li style="padding:4px 10px;background:black"><a style="color:white" href="" <span class="icon-link">website /</a></li>
                            <li style="padding:4px 10px;background:black"><a style="color:white" href="" <span class="icon-message">Message /</a></li>
                              <li style="padding:4px 10px;background:black"><a style="color:white" href="" <span class="icon-phone">Hired</a></li>
                                <li style="padding:4px 10px;background:black"><a style="color:white" href="#"><i class="icon-twitter"></i></a></li>
                                <li style="padding:4px 10px;background:black"><a style="color:white" href="#"><i class="icon-facebook"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </nav> --}}
             </div>
          </div>
        </div>
        <div class="col-md-3" ></div>
        <div class="col-md-9" id="similar" style="padding-right:0;margin-top:15px;">

          <h2 style="background:white;margin-bottom:0;width:30%;padding-left:20px">Similar Lawyer</h2>
          @foreach ($lawyerPersonal as $lawyer)
          <div class="profile" style="background:white;margin-right:2px;padding:0 10px;overflow:hidden">
          <div class="about"  style="padding:16px 0">

              @if ($lawyer->highest_degree=='Msc in Law' || $lawyer->prac_area=='Business law')
                <div class="col-md-2">
                  <img style="width:100%;height:150px;border:2px solid gray" src="{{asset('/storage')}}/{{$lawyer->profile_photo}}" alt="">

                </div><br>
                  <div class="col-md-10" >
                    <span style="color:black">{{ $lawyer->l_name }} / </span>
                    <span >Reviews : <span style="color:red">****</span></span>
                    <p style="margin-bottom:0;padding-bottom:0">{{ $lawyer->details }}</p>
                    <nav class="fh5co-nav" role="navigation">
                      <div class="top-menu col-md-12">
                        <div class="col-xs-10  menu-">
                          <ul>
                            <li ><a href="#qualify" > <span class="icon-phone"></span> {{ $lawyer->phone }} /</a></li>
                            <li ><a href="" <span class="icon-link">website /</a></li>
                              <li ><a href="" <span class="icon-message">Message /</a></li>
                                <li ><a href="" <span class="icon-phone">Hired</a></li>
                                </ul>
                              </div>
                            </div>
                          </nav>
                  </div>
           </div>
        </div><hr>
      @endif
      @endforeach

      </div>
         </div>
      </div>
      <br><br>
    </div>
</aside>

@include('include.footer')
