<?php

namespace Classes;


class ConcreteDiscount extends Discount
{
    public function __construct($amount = null, $price = null)
    {
        $this->setAmount($amount);
        $this->setPrice($price);
    }

    public function apply()
    {
        return $this->getPrice() - $this->getAmount();
    }
}