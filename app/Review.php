<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    
    protected $fillable  = ['image','user_id','product_id','description'];
}
