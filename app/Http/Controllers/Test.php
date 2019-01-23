<?php

namespace App\Http\Controllers;

use Classes\ConcreteDiscount;

class Test extends Controller
{
    public function __construct()
    {
        $amount = 40;
        $a = new ConcreteDiscount($amount);
        $a->setPrice(100);
        $first = ($a->apply());
        $a->setAmount(20);
        $a->setPrice(40);
        $sec = $a->apply();
        dd($first, $sec);
    }
}
