<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Warehouse;

class ProductController extends Controller
{
	public function show($id)
	{
		$product = Product::find($id);

		return view('show', compact('product'));

	}

	public function calculate()
	{


	}
}
