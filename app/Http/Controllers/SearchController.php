<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class SearchController extends Controller
{

   public function all_category()

   {

   		return ['all' => Category::all(),'main' =>Category::distinct()->select('main_cat')->get()];
   }

   public function specific_category($id)

   {
   		$arr = $this->all_category();
        $arr['products'] = Product::where('category_id', '=', $id)->get();
        return view('products/index', $arr);

   		//return Product::where('category_id', '=', $id)->get();
   }

   public function specific_product()

   {

  
   }
   
   public function main_category()

   {

   		return Category::distinct()->select('main_cat')->get();
   }

}
