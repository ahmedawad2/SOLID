<?php

namespace Classes;


abstract class Validator
{
    abstract protected function validateDiscountPrice($price = null): bool;
}