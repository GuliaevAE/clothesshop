@extends('layout')

@section('content')

<div class="container">
	<h3>Clients</h3>
	<a href="{{ route('clients.create')}}" class="btn btn-success">Create</a>
		
			<div class="col-md-10 col-md-offset-1">
				<table class="table">
					<thead>
						<tr>
							<td>Id</td>
							<td>Title</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						@foreach($clients as $client)
						<tr>
							<td>{{$client->id}}</td>
							<td>{{$client->Imy}}</td>
							<td>
								<a href="{{route('clients.show',$client->id)}}">
									<i class="btn btn-success">show</i>
								</a>	
							
								<a href="{{route('clients.edit',$client->id)}}">
									<i class="btn btn-warning">edit</i>
								</a>	

									{!! Form::open(['method' => 'DELETE', 'route'=> ['clients.destroy', $client->id]])!!}
									<button onclick="return confirm('Are you sure?')"><i class="btn btn-danger">delete</i></button>
									{!! Form::close()!!}								
							</td>
						</tr>
						@endforeach
						</tbody>
				</table>				
			</div>
		
		</div>
	</div>
	
@endsection