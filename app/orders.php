<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'idOrders';
	protected $fillable = ['dataOrders', 'dataIspolnenia', 'clients_id'];
	

	public function Clients()
	{
		return $this->belongsTo('App\Clients');
	}

}


