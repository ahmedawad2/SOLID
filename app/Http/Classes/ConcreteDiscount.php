<?php

namespace Classes;


class ConcreteDiscount extends Discount
{
    public function __construct($amount)
    {
        $this->setAmount($amount);
    }

    public function apply()
    {
        return $this->getPrice() - $this->amount;
    }
}