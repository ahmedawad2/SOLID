<?php

namespace Classes;

class Validator
{
    public static function isPositive($number)
    {
        return (is_int($number) || is_double($number)) && $number > 0;
    }
}