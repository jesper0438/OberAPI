<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        //50 Sample products will be seeded into the database
         for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->name,
                'place' => $faker->citySuffix,
                'address' => $faker->address,
            ]);
        }

    }
        
}
