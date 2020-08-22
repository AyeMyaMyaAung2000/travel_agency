<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $fillable = [
        'voucherno','depature_date','passenger','total','status','note','user_id','package_id',
    ];
}
