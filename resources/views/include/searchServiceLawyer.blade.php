@include('include.header')
<aside id="fh5co-hero-profile" class="js-fullheight-profile" >
		<div class="flexslider-profile js-fullheight-profile" style="background-color:white;height:100%">
				<div class="container"><br><br>
					<div class="col-md-9">
						Home>Services>Dhaka>Business Lawyers
						<h2>{{ $service_area }} {{ $service_name }} lawyers ({{$count}} results)</h2>
						<p>Searching attorneys near you. Read reviews and contact them directly.</p>
					</div>
					<div class="col-md-3">
					<form  method="" action="" >
					 <div class="input-group" >
						 <select name=""  style="box-shadow: 3px 3px 2px grey;background:#efefef;border-color:white;padding:9px 10px">
							<option value="">You are a Licesend</option>
							<option value="">Top 5 Star Reviews</option>
							<option value="">Max Won cases</option>
							<option value="">You are a Licesend</option>
							<option value="">Qualifications</option>
							<option value="">You are Not a Licesend</option>
						 </select>
					 </div>
					 </form>
				 </div>
				 @forelse ($search_appropriate_lawyer as $search)

					 <div class="col-md-9" id="similar" style="padding-right:0;margin-top:15px;">
						 <div class="profile" style="box-shadow: 7px 7px 4px #efefef;background:white;margin-right:2px;padding:0 10px;overflow:hidden">
						 <div class="about"  style="padding:16px 0">
							 <div class="col-md-2">
								 <img style="width:100%;height:150px;border:2px solid gray" src="{{asset('/storage')}}/{{$search->profile_photo}}" alt="">
							 </div>
								 <div class="col-md-10" >
									 <span>{{$search->l_name}} / </span>
									 <span >Reviews : <span style="color:red">****</span></span>
									 <p style="margin-bottom:0;padding-bottom:0">{{$search->details}}</p>
									 {{$search->prac_area}}
									 {{$search->p_address}}
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
				 </div>
			 @empty
				 <p class="col-md-12 alert alert-danger">This Service is not available in your selected area.</p>
			 @endforelse






					 </div>
					 <br>
				</div>
	</aside>

@include('include.footer')
