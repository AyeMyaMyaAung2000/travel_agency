<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $fillable = [
        'name','photo', 'price','duration_time','description','hotel_id','car_id','category_id'
    ];

     public function hotel($value='')
    {
    	return $this->belongsTo('App\Hotel');
    }
    public function car($value='')
    {
    	return $this->belongsTo('App\Car');
    }
    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
    

}
