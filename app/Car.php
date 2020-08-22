<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   protected $fillable = [
        'name', 'photo','price'
    ];
     public function package($value='')
    {
    	return $this->belongsTo('App\Package');
    }
}
