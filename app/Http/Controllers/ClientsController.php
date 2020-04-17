<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Clients;
use App\Http\Requests\createClientRequest;
use App\Http\Requests\updateClientRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
class ClientsController extends Controller
{
	use ValidatesRequests;
	
    public function index()
	{
		$clients=Clients::all();

		return view('clients.index', ['clients'=>$clients]);
	}
	 public function create()
	{
		return view('clients.create');
	}
	 public function shop(createClientRequest $request)
	{
		$client = new Clients;
		$client->fill($request->all());
		
		
		$client->save();
		return redirect()->route('clients.index');
	}
	 public function edit($clients_id)
	{
		$myClient = Clients::find($clients_id);
		
		return view('clients.edit',['client' => $myClient]);
	}

public function update(updateClientRequest $request, $clients_id)
	{
		$myClient = Clients::find($clients_id);

		$myClient ->fill($request->all());
		$myClient ->save();

		return redirect()->route('clients.index');
	}

	public function show($clients_id)
	{
		$myClient = Clients::find($clients_id);
		
		return view('clients.show',['client' => $myClient]);
	}

	public function destroy($clients_id)
	{
		Clients::find($clients_id)->delete();
		
		return redirect()->route('clients.index');
	}



}
