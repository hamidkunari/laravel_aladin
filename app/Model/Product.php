<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'product_name', 'product_type' , 'product_code','selling_price','supplier_id','buying_date','image','product_quantity'
    ];
}
 