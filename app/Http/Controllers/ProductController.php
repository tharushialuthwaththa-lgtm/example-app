<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [

            [
                'name' => 'Tops To Wear With Long Skirt',
                'price' => '2000',
                'image' => 'img/sh1.jpg'
            ],

            [
                'name' => 'Combination White Skirt With Blouse',
                'price' => '3500',
                'image' => 'img/sh2.jpg'
            ],

            [
                'name' => 'Western Denim Shirt',
                'price' => '3400',
                'image' => 'img/sh6.jpg'
            ]

        ];

        return view('products', compact('products'));
    }
}
