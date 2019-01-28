<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Classes\GetDiscountInstance;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->toArray();

        $number = rand(1, count($products));


//        dd($products);
        $newOrder = [];
        $total = 0;
        for ($i = 0; $i < $number; $i++) {
            $amount = rand(1, 5);
            $product = $products[array_rand($products)];
            $newOrder[] = [
                'product' => $product,
                'amount' => $amount
            ];
            $total += $this->manipulateOrderProduct($product);
        }
        $newOrder['price'] = $total;
        $newOrder = Order::create($newOrder);
        dd($newOrder);
    }

    private function manipulateOrderProduct($product = array())
    {
        $price = $product['price'];
        if (array_key_exists('discount', $product)) {

            $price = GetDiscountInstance::getInstance($product['discount']['type'])->setPrice($price)
                ->setAmount($product['discount']['amount'])
                ->apply();
        }
        return $price;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
