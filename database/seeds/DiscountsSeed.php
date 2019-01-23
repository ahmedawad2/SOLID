<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discounts = [
            [
                'type' => 'concrete',
                'amount' => 10
            ],
            [
                'type' => 'concrete',
                'amount' => 100
            ]
        ];
        DB::table((new \App\Discount())->getTable())->delete();
        DB::table((new \App\Discount())->getTable())->insert($discounts);
    }
}
