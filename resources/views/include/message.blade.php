@include('include.header')
<div id="fh5co-contact" style="background-color:white;">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
          <div class="text-center animate-box">
         <div class="panel panel-body" style="padding:15px 0 0 0;border-radius:0;border:0;margin-bottom:0;background:#f0f9f89e">
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

           </div>
         </div>
         <div class="lol col-md-12">
           <div class="row">
               <div class="col-md-12" style="padding:0">
                 {{-- <a href="{{ url('/lawyer/hired/submit') }}/{{ $lawyerPersonalInfo->id }}" class="btn btn-primary" style="background:#46B7D9;border:0;border-radius:0;width:100%;">Hired</a> --}}

               </div>
               <div class="col-md-12" style="padding:0">
                   <a href="" class="btn btn-success" style="border:0;border-radius:0;width:100%;">Message</a>
               </div>
               <div class="col-md-12" style="padding:0">
                   <a href=""  style="border:0;border-radius:0;width:100%;">View Profile</a>
               </div>
            </div>
         </div>
        </div>
				</div>
				<div class="col-md-9 animate-box panel panel-primary" style="background:#f0f9f89e;border:0;padding:60px 80px 40px 80px;">

					@if(\Auth::check())
						<h3 style="padding-bottom:35px" class="text-center">Free Consult with Lawyers</h3>
						<form action="{{url('/message/submit')}}" method="POST">
							@csrf
							<div class="row form-group">
								<div class="col-md-12">
									<label for="personal">lawyer Personal Id</label>
										<input type="text" name="personal_info_id" value="{{ $lawyerPersonalInfo->id }}">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Provide some details about your situation, but remember not to include sensitive information.
										An attorney-client relationship is only formed once an attorney formally agrees to represent you.</label>
									<textarea class="form-control" name="message"></textarea>
								</div>
							</div>

							{{-- <div class="row form-group">
								<div class="col-md-12">
									<input type="checkbox" >
									<label for="subject">I prefer that this attorney replies to my message with a phone call (optional).</label>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="email">Bangladeshi Phone Number Only</label>
									<input class="form-control"></input>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<input type="checkbox" >
									<label for="subject">Morning</label>
								</div>
								<div class="col-md-4">
									<input type="checkbox" >
									<label for="subject">Afternoon</label>
								</div>
								<div class="col-md-4">
									<input type="checkbox" >
									<label for="subject">Evening</label>
								</div>
							</div> --}}

							<div class="form-group">
								<button style="border-radius:0;padding:10px 40px" type="submit" class="btn btn-success">
										Send Message
								</button>

							</div>

						</form>
				 @else
					 <strong style="padding-bottom:35px;" class="text-center">If You Login then Free Consult with Lawyers</strong><br><br><br>
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
