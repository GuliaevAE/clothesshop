@extends('layout')

@section('content')

	@include('errors')

<div class="container">
	<h3>Client # - {{$client->id}}</h3>
	<div class="row">
		<div class="col-md-12">
			<h3>{{$client->Imy}}</h3>
			<h3>{{$client->Otchestvo}}</h3>
			<h3>{{$client->Gorod}}</h3>
			<h3>{{$client->Email}}</h3>
			<h3>{{$client->Telefon}}</h3>
					
		</div>
	</div>		
</div>
	
@endsection
