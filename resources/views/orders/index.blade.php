@extends('layout')

@section('content')

<div class="container">
	<h3>orders</h3>
	<a href="{{ route('orders.create')}}" class="btn btn-success">Create</a>
		
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
						@foreach($orders as $order)
						<tr>
							<td>{{$order->idOrders}}</td>
							<td>{{$order->DataOrders}}</td>
							<td>
								<a href="{{route('orders.show',$order->idOrders)}}">
									<i class="btn btn-success">show</i>
								</a>	
							
								<a href="{{route('clients.edit',$order->idOrders)}}">
									<i class="btn btn-warning">edit</i>
								</a>	

									{!! Form::open(['method' => 'DELETE', 'route'=> ['orders.destroy', $order->idOrders]])!!}
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