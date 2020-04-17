@extends('layout')

@section('content')

	@include('errors')

<div class="container">
	<h3>Client # - {{$order->idOrders}}</h3>
	<div class="row">
		<div class="col-md-12">
			<h3>{{$order->DataOrders}}</h3>
			<h3>{{$order->DataIspolnenia}}</h3>
			<h3>{{$order->clients_id}}</h3>
		</div>
	</div>		
</div>
	
@endsection
