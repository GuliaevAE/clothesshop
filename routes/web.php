<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('clients', 'ClientsController@index')->name('clients.index');

Route::get('clients/create', 'ClientsController@create')->name('clients.create');

Route::post('clients/shop', 'ClientsController@shop')->name('clients.shop');

Route::get('clients/{id}/edit', 'ClientsController@edit')->name('clients.edit');

Route::put('clients/{id}/update', 'ClientsController@update')->name('clients.update');

Route::get('clients/{id}/show', 'ClientsController@show')->name('clients.show');

Route::delete('clients/{id}/destroy', 'ClientsController@destroy')->name('clients.destroy');






Route::get('orders', 'OrdersController@index')->name('orders.index');

Route::get('orders/create', 'OrdersController@create')->name('orders.create');

Route::post('orders/shop', 'OrdersController@shop')->name('orders.shop');

Route::get('orders/{idOrders}/edit', 'OrdersController@edit')->name('orders.edit');

Route::put('orders/{idOrders}/update', 'OrdersController@update')->name('orders.update');

Route::get('orders/{idOrders}/show', 'OrdersController@show')->name('orders.show');

Route::delete('orders/{idOrders}/destroy', 'OrdersController@destroy')->name('orders.destroy');
