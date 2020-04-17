<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'clients_id';
	protected $fillable = ['imy', 'familia', 'otchestvo', 'gorod', 'email', 'telefon'];
	public function Orders()
{
return $this->belongsTo('App\Orders');
}
}

