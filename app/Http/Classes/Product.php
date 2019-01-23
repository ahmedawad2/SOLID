<?php

namespace Classes;


abstract class Product implements \Interfaces\Product
{
    private $name;
    private $price;

    public final function setPrice($price = null)
    {
        if (isset($price) && Validator::isPositive($price)) {
            $this->price = $price;
        }
        return $this;
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

    public function getName()
    {
        return $this->name;
    }


}