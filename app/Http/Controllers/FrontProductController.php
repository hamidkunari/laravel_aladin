<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use App\Model\Category;

class FrontProductController extends Controller
{

	public function index(){
    $products = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('suppliers','products.supplier_id','suppliers.id')
                    ->select('categories.category_name','suppliers.name','products.*')
                    ->orderBy('products.id','DESC')
                    ->get();
         $categories  = DB::table('categories')->get();           
                    return view('front', compact('products','categories'));

                }

                public function procat($id){
                	 $procats  = DB::table('categories')->where('id',$id)->first();
                	return view('product-by-category' ,compact('procats'));
                }
}
