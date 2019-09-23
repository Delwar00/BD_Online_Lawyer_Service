
  <div id="fh5co-practice" class="fh5co-bg-section" style="padding:70px 0">

   <div class="container">
     <div class="row animate-box">
       <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="padding-bottom:0;margin-bottom:10px">
         <h2>Top-rated lawyers near you</h2>
         <p>Here is our all lawyers profile. They are always prepare to service our clients</p>
       </div>
     </div>
     <div class="row">

          @foreach ($personal_info as $personal)
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
       {{ $personal_info->links() }}
     </div>
   </div>
  </div>
