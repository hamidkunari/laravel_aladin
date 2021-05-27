<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable  = ['name','code','coupon_type','coupon_amount','description'];


}
