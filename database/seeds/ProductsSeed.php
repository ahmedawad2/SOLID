<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'price' => 50
            ],
            [
                'price' => 100
            ],
            [
                'price' => 150
            ]
        ];
        DB::table((new \App\Product())->getTable())->delete();
        DB::table((new \App\Product())->getTable())->insert($products);
    }
}
