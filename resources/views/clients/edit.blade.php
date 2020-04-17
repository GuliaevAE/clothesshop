@extends('layout')

@section('content')

	@include('errors')

<div class="container">
	<h3>Edit client # - {{$client->id}}</h3>
	
		<div class="row">
			<div class="col-md-12">
			{!! Form::open(['route' => ['clients.update', $client->id], 'method'=>'PUT'])!!}
			
			
				<div class="form-group">
						
						Имя
						<textarea name="imy" id="" cols="30" rows="1" class="form-control">{{$client->imy}}</textarea>
						<br>
						Фамилия
						<textarea name="familia" id="" cols="30" rows="1" class="form-control">{{ old('familia')}}</textarea>
						<br>
						Отчество
						<textarea name="otchestvo" id="" cols="30" rows="1" class="form-control">{{ old('otchestvo')}}</textarea>
						<br>
						Город
						<textarea name="gorod" id="" cols="30" rows="1" class="form-control">{{ old('gorod')}}</textarea>
						<br>
						Email
						<textarea name="email" id="" cols="30" rows="1" class="form-control">{{ old('email')}}</textarea>
						<br>
						Телефон
						<textarea name="telefon" id="" cols="30" rows="1" class="form-control">{{ old('telefon')}}</textarea>
						<br>
						<button class="btn btn-warning">Submit</button>
				</div>
				{!! Form::close()!!}
			</div>
		</div>
	</div>
	
@endsection