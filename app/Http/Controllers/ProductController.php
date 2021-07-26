<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function show()
	{

		$products = Product::all();
		$warehouse = Warehouse::all();
		return view('show', compact('products','warehouse'));
		
	}

}