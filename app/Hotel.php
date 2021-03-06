<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
   protected $fillable = [
        'name', 'photo','price'
    ];
    public function package($value='')
    {
    	return $this->belongsTo('App\Package');
    }
}
 