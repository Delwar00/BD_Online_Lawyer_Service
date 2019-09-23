@extends('layouts.app')
@section('content')
	<br><br>
		<div style="width:82%;margin:auto;padding:60px 100px 60px 100px " class="well">
			<div class="row">
				<table class="table table-bordered table-striped;">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Client Messages</th>
							<th scope="col">Sender</th>
							<th scope="col">Sender Phone Number</th>
							{{-- <th scope="col">Time</th> --}}
							<th scope="col" >Feedback</th>
						</tr>
					</thead>
					<tbody>
							@foreach ($free_consult_message as $consult)
								<tr>
										<th scope="row">{{ $consult->id }}</th>
									<td>{{ $consult->message }}</td>
									<td>{{ $consult->email }}</td>
									<td>{{ $consult->phone }}</td>
									{{-- <td>{{ $consult->created_at->diffForHumans('Asia/Dhaka') }}</td> --}}
									<td ><a class="btn btn-primary" href="{{ '/lawyer/message/feedback' }}/{{ $consult->user_id }}">Reply</a></td>
								</tr>
							@endforeach
					</tbody>
					</table>
			</div>
		</div>

	</div>

@endsection
