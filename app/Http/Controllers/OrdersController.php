<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Orders;
use App\Http\Requests\createOrderRequest;
use App\Http\Requests\updateOrderRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
class OrdersController extends Controller
{
	use ValidatesRequests;
	
    public function index()
	{
		$orders=Orders::all();

		return view('orders.index', ['orders'=>$orders]);
	}
	 public function create()
	{
		return view('orders.create');
	}


	public function shop(createOrderRequest $request)
{

orders::create($request->all());

return redirect()->route('orders.index');

} 
	/*public function shop(createOrderRequest $request)
	{
		$order = new Orders;
		$order->fill($request->all());
		
		dd($order);

		$order->save();
		return redirect()->route('orders.index');
	}
	*/
	 public function edit($idOrders)
	{
		$myOrder = Orders::find($idOrders);
		
		return view('orders.edit',['order' => $myOrder]);
	}

public function update(updateOrdersRequest $request, $idOrders)
	{
		$myOrder = Orders::find($idOrders);

		$myOrder ->fill($request->all());
		$myOrder ->save();

		return redirect()->route('orders.index');
	}

	public function show($idOrders)
	{
		$myOrder = Orders::find($idOrders);
		
		return view('orders.show',['order' => $myOrder]);
	}

	public function destroy($idOrders)
	{
		Orders::find($idOrders)->delete();
		
		return redirect()->route('orders.index');
	}



}
