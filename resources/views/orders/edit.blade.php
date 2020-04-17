@extends('layout')

@section('content')

	@include('errors')

<div class="container">
	<h3>Edit order # - {{$order->idOrders}}</h3>
	
		<div class="row">
			<div class="col-md-12">
			{!! Form::open(['route' => ['orders.update', $order->idOrders], 'method'=>'PUT'])!!}
			
			
				<div class="form-group">
						
						
						Дата заказа
						<textarea name="dataOrders" id="" cols="30" rows="1" class="form-control">{{ old('dataOrders')}}</textarea>
						<br>
						Дата исполнения
						<textarea name="dataIspolnenia" id="" cols="30" rows="1" class="form-control">{{ old('dataIspolnenia')}}</textarea>
						<br>
						
						<button class="btn btn-warning">Submit</button>
				</div>
				{!! Form::close()!!}
			</div>
		</div>
	</div>
	
@endsection