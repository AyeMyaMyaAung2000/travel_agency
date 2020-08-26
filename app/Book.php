<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $fillable = [
        'voucherno','depature_date','passenger','total','status','note','user_id','package_id',
    ];
     public function user($value='')
    {
        return $this->belongsTo('App\User');
    }
     public function package($value='')
    {
        return $this->belongsTo('App\Package');
    }
     public function cars($value='')
    {
        return $this->belongsTo('App\Car');
    }

}
