<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public $table = 'orders';
    public $timestamps = false;
    protected $primaryKey = 'idOrders';
	  protected $fillable = ['DataOrders','DataIspolnenia','clients_id'];


	public function Clients()
	{
		return $this->belongsTo('App\Clients');
	}

}
