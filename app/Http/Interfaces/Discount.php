<?php

namespace Interfaces;

interface Discount extends OwnPrice
{
    public function apply();
}