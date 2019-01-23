<?php

namespace Classes;


abstract class Product implements \Interfaces\Product
{
    private $name;
    private $price;

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}