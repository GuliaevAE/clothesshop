@extends('layout')

@section('content')

	@include('errors')

<div class="container">
	<h3>Create</h3>
	
		<div class="row">
			<div class="col-md-12">
			{!! Form::open(['route' => 'orders.shop'])!!}
			
			
				<div class="form-group">


						<label for="clients_id">Clients:</label>
						        <select class="form-control" name="clients_id">
								
						            <?php
						            $results = DB::select('select * from clients');
						            foreach ($results as $value): ?>
						                <option value="<?=$value->clients_id;?>"><?=$value->Imy;?></option>
						            <?php endforeach; ?>
						        </select>
						



						Дата заказа
						<textarea name="dataOrders" id="" cols="30" rows="1" class="form-control">{{ old('dataOrders')}}</textarea>
						<br>
						Дата исполнения
						<textarea name="dataIspolnenia" id="" cols="30" rows="1" class="form-control">{{ old('dataIspolnenia')}}</textarea>
						

								


						<br>
						<button class="btn btn-success">Submit</button>
				</div>
				{!! Form::close()!!}
			</div>
		</div>
	</div>
	
@endsection