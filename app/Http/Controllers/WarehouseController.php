<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Material;

class WarehouseController extends Controller
{
    public function index()
    {
    	$warehouses = Warehouse::all();
    	
    	return view ('index',compact('warehouses'));
    }
}
