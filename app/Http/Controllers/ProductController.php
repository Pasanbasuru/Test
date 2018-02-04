<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
   

   public function index()

   {
         $arr = app('App\Http\Controllers\SearchController')->all_category();
         $arr['products'] = Product::all();
   		return view('products/index', $arr);
   }

   public function show()

   {

   		return view('products/show');
   }

   public function create()

   {

   		return view('products/create');
   }
}
