<?php

namespace App\Http\Controllers;

use App\Discount;
use Classes\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
        $discounts = Discount::all()->toArray();
        $products = \App\Product::all()->toArray();


        $name = str_random(10);

        $discount = ($discounts[array_rand($discounts)]);
//        $discount = null;

        $collection = ($products[array_rand($products)]);
//        $collection = null;

        $price = rand(10, 200);
//        $price = null;

        $newProduct = [
            'name' => $name,
            'price' => $price
        ];
        if (isset($discount)) {
            $newProduct['discount'] = $discount;
        }
        if (isset($collection)) {
            $newProduct['collection'] = $collection;
        }
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
