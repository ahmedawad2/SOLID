<?php

namespace Interfaces;

interface Discount
{
    public function getName();

    public function getAmount();

    public function getPrice();

    public function setAmount($amount);

    public function setName($name);

    public function setPrice($price);

    public function apply();
}