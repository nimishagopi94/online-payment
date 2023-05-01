<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productlist($value='')
   {
   		$productlist = DB::table('products')->get();
		return view('productlist', compact('productlist'));
   }
}
