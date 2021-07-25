<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
	use HasFactory;

	public function products()
	{
		return $this->belongsToMany(Product::class, 'product_materials');
	}

	public function warehouses()
	{
		return $this->belongsToMany(Warehouse::class);
	}
}
