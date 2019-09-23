@extends('layouts.app')
@section('content')
	<br><br>
	<div class="container-fluid">
			<div class="row ">
				<div class="col-md-1"></div>

					<div class="col-md-10">
							<div class="card" style="background-color:#efefef;padding:60px 100px 60px 100px;border-radius:5px">
						 </h3>
									<div class="card-body">
											<form method="POST" action="{{url('lawyer/fmessage/submit')}}">
													@csrf
													<div class="form-group row">
															<label class="col-md-6 col-form-label ">User_id</label>

															<div class="col-md-12">
																	<input  value="{{ Auth::id() }}"style="padding:8px 10px;width:100%;" type="text" name="user_id" required>
															</div>
													</div>
													<div class="row form-group">
														<div class="col-md-12">
															<label for="personal">lawyer Personal Id</label>
															  <input type="text" name="personal_info_id" value="{{ $feedback_message->id }}">
														</div>
													</div>
													<div class="form-group row">
															<label class="col-md-6 col-form-label " style="font-size:17px">FeedBack Client </label>

															<div class="col-md-12">
																<textarea name="message" class="form-control"></textarea>
															</div>
													</div>

													<div class="form-group row mb-0">
															<div class="col-md-12 ">
																	<button style="border-radius:0;padding:10px 40px" type="submit" class="btn btn-success">
																		FeedBack
																	</button>
															</div>
													</div>
											</form>
									</div>
							</div>
					</div>
			</div>
	</div>

@endsection
