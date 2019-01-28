<?php

namespace Classes;


class BundleProduct extends Product
{
    private $products;

    public final function setPriceFromCollection(array $collection = null)
    {
        if (isset($collection)) {
            $total = 0;
            foreach ($collection as $product) {
                if ($product instanceof \Interfaces\Product) {
                    $total += $product->getPrice();
                } else {
                    throw new \Exception('attempt to use a non-product object');
                }
            }
            $this->setPrice($total);
        }
    }
}