<?php

namespace App\Http\Controllers;

use Classes\ConcreteDiscount;
use Classes\GetDiscountInstance;
use Classes\Validator;

class Test extends Controller
{
    public function __construct()
    {
//        $amount = 40;
//        $a = new ConcreteDiscount($amount);
//        $a->setPrice(100);
//        $first = ($a->apply());
//        $a->setAmount(20);
//        $a->setPrice(40);
//        $sec = $a->apply();
//        dd($first, $sec);

//        $newPrice = GetDiscountInstance::getInstance(GetDiscountInstance::DISCOUNT_TYPE_CONCRETE)
//            ->setPrice(100)
//            ->setAmount(50)
//            ->apply();
//        dd($newPrice);
    }

    public function index()
    {

    }
}
