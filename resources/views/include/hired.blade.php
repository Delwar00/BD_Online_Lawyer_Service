@include('include.header')
<div id="fh5co-contact" style="background-color:#EAEAEA;">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
          <div class="text-center animate-box">
         <div class="panel panel-body" style="padding:15px 0 0 0;border-radius:0;border:0;margin-bottom:0">
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
					 <p style="padding:2px 30px;text-align:justify">{{ str_limit($lawyerPersonalInfo->details),10 }}</p>
					 Area : {{ $lawyerAddress->p_address }}

           </div>
         </div>
         <div class="lol col-md-12">
           <div class="row">
               <div class="col-md-12" style="padding:0">
                 <a href="" class="btn btn-primary" style="background:#46B7D9;border:0;border-radius:0;width:100%;">Hired</a>

               </div>
               <div class="col-md-12" style="padding:0">
                   {{-- <a href="" class="btn btn-success" style="border:0;border-radius:0;width:100%;">Message</a> --}}
               </div>
               <div class="col-md-12" style="padding:0">
                   <a href=""  style="border:0;border-radius:0;width:100%;">View Profile</a>
               </div>
            </div>
         </div>
        </div>
				</div>
				<div class="col-md-9 animate-box panel panel-primary" style="border:0;padding:60px 80px 40px 80px;">
					@if(\Auth::check())
					<h3 style="padding-bottom:35px" class="text-center">Hired Lawyers</h3>
					<form action="#">
											<div class="row form-group">
												<div class="col-md-12">
													<label for="expairation">Briefly Describe Your legal Issue</label>
												<textarea  class="form-control" placeholder="Describe ??"></textarea>
												</div>

											</div>

											<div class="col-md-12" id="similar" style="padding-right:0;padding-left:0;margin-top:15px">
												<div class="profile" style="background:#EAEAEA;margin-right:2px;padding:0 10px;overflow:hidden">
												<div class="about"  style="padding:16px 0">
													<div class="col-md-2">
														<button class=" btn btn-info" style="border-radius:0;display:block">Select</button>
														<img style="width:94px;height:100px;border:2px solid gray" src="{{asset('/storage')}}/{{$lawyerPersonalInfo->profile_photo}}" alt="">
													</div>
														<div class="col-md-10" >
															<span>{{ $lawyerPersonalInfo->l_name }} / </span>
															<span >Reviews : <span style="color:red">****</span></span>
															<p style="margin-bottom:0;padding-bottom:0">{{ $lawyerPersonalInfo->details }} </p>
															<nav class="fh5co-nav" role="navigation">
																<div class="top-menu col-md-12">
																	<div class="col-xs-10  menu-">
																		<ul>
																			<li ><a href="#qualify" > <span class="icon-phone"></span> 0178384849 /</a></li>
																			<li ><a href="" <span class="icon-link">website /</a></li>
																				<li ><a href="" <span class="icon-message">Message /</a></li>
																					<li ><a href="" <span class="icon-phone">Hired</a></li>
																					</ul>
																				</div>
																			</div>
																		</nav>
														</div>
												 </div>
											</div>
												<br>
												<div class="col-md-12" id="similar" style="padding-right:0;padding-left:0;margin-top:15px">
													<div class="form-group">
														<div class="col-md-12"><strong>Account Information</strong><br>
	
														</div>

															<br><br>
														</div>
													</div>
														<p>
														  <a style="border-radius:0" class="btn btn-info" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Bkash</a>
														  <button style="border-radius:0" class="btn btn-info" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">DBBL</button>
														  <button style="border-radius:0" class="btn btn-info" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="#multiCollapseExample3">DBBL Mobile Banking</button>
														</p>
														<div class="row">
														  <div class="col">
														    <div class="collapse multi-collapse" id="multiCollapseExample1">
														      <div class="card card-body">
																		<div class="col-md-12">
																			Account No : <input type="text" name="bkash" style="padding:5px 10px;border-radius:3px" placeholder="Bkash Account Number">
																		  Password : <input type="password" name="bkash_pass" style="padding:5px 10px;border-radius:3px" placeholder="Confirm your Password">
																	</div>
																</div><br><br><br>
														    </div>
														  </div>
														  <div class="col">
														    <div class="collapse multi-collapse" id="multiCollapseExample2">
														      <div class="card card-body">
																		<div class="col-md-12">
												 						 Account No : <input type="text" name="dbb;" style="padding:5px 10px;border-radius:3px" placeholder="DBBL Account Number">
												 						 Password : <input type="password" name="dbbl_pass" style="padding:5px 10px;border-radius:3px" placeholder="Confirm your Password">
												 				 </div>
														    </div><br><br><br>
														  </div>
														</div>
														<div class="col">
															<div class="collapse multi-collapse" id="multiCollapseExample3">
																<div class="card card-body">
																	<div class="col-md-12">
																	 Account No : <input type="text" name="mobile_dbbl" style="padding:5px 10px;border-radius:3px" placeholder="DBBL Mobile B. Account No.">
																	 Password : <input type="password" name="mobile_dbbl_pass" style="padding:5px 10px;border-radius:3px" placeholder="Confirm your Password">
															 </div><br><br>
															</div>
														</div>
													</div>
											 <div class="form-group col-md-12">
												<a href="proced.html" style="border-radius:0" class="btn btn-success">Send Message</a>


											</div>


										</form>
									@else
				 					 <strong style="padding-bottom:35px;" class="text-center">If You Login then Hired Lawyers</strong><br><br><br>
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

				 							 <div class="form-group row mb-0">
				 									 <div class="col-md-12 offset-md-4">
				 											 <button style="border-radius:0;padding:10px 40px" type="submit" class="btn btn-success">
				 													 {{ __('Login') }}
				 											 </button>
				 											<a class="btn btn-link" href="{{ url('/register') }}">
				 													{{ __('Register Now') }}
				 											</a>
				 									 </div>
				 							 </div>
				 					 </form>
				 					@endif
				</div>
			</div>

		</div>
	</div>

@include('include.footer')
