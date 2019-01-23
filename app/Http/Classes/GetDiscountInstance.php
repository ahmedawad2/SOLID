<?php

namespace Classes;


class GetDiscountInstance
{
    const DISCOUNT_TYPE_CONCRETE = 'concrete';
    private static $concreteInstance = null;

    public static function getAllDiscountTypes()
    {
        return [
            self::DISCOUNT_TYPE_CONCRETE,
        ];
    }

    public static function getInstance($type = null): Discount
    {
        if (in_array($type, self::getAllDiscountTypes())) {
            switch (strtolower($type)) {
                case self::DISCOUNT_TYPE_CONCRETE:
                    return self::getConcreteInstance();
                default:
                    throw new \Exception('discount type = ' . $type . ' is un recognized');
            }
        }
    }

    private static function getConcreteInstance()
    {
        if (!isset(self::$concreteInstance)) {
            self::$concreteInstance = new ConcreteDiscount();
        }
        return self::$concreteInstance;
    }

}