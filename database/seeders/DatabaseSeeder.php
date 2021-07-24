<?php

namespace Database\Seeders;

use Database\Seeders\ProductSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProductSeeder::class);
         $this->call(MaterialSeeder::class);
         $this->call(ProductMaterialSeeder::class);
         $this->call(WarehouseSeeder::class);
    }
}
