<?php

namespace Classes;

abstract class Discount implements \Interfaces\Discount
{
    private $name;
    private $amount;
    private $price;


    public function getName()
    {
        return $this->name;
    }

    public final function getAmount()
    {
        if (Validator::isPositive($this->amount)) {
            return $this->amount;
        } else {
            throw new \Exception('attempt to use invalid amount = ' . $this->amount);
        }
    }

    public final function getPrice()
    {
        if (Validator::isPositive($this->price)) {
            return $this->price;
        } else {
            throw new \Exception('attempt to use invalid price = ' . $this->price);
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public final function setAmount($amount = null)
    {
        if (isset($amount) && Validator::isPositive($amount)) {
            $this->amount = $amount;
        }
        return $this;
    }

    public final function setPrice($price = null)
    {
        if (isset($price) && Validator::isPositive($price)) {
            $this->price = $price;
        }
        return $this;
    }

}