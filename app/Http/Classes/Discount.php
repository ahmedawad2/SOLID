<?php

namespace Classes;

abstract class Discount extends Validator implements \Interfaces\Discount
{
    protected $name;
    protected $amount;
    private $price = 0;


    public function getName()
    {
        return $this->name;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getPrice()
    {
        if ($this->validateDiscountPrice()) {
            return $this->price;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setPrice($price)
    {
        if ($this->validateDiscountPrice($price)) {
            $this->price = $price;
        }
    }

    protected function validateDiscountPrice($price = null): bool
    {
        $price = isset($price) ? $price : $this->price;
        if (floatval($price) <= 0) {
//            throw new \Exception('can not interact with a price = ' . $this->price);
            return false;
        }
        return true;
    }
}