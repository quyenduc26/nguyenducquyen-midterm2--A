<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.homepage');
})->name('home');

Route::get('/shop', function () {
    $data = [
        [
            'image' => 'product-3.png',
            'title' => 'Nordic Chair',
            'product-price' => '$50.00'
        ],
        [
            'image' => 'product-1.png',
            'title' => 'Nordic Chair',
            'product-price' => '$50.00'
        ],
        [
            'image' => 'product-2.png',
            'title' => 'Kruzo Aero Chair',
            'product-price' => '$78.00'
        ],
        [
            'image' => 'product-1.png',
            'title' => 'Kruzo Aero Chair',
            'product-price' => '$78.00'
        ],
        [
            'image' => 'product-3.png',
            'title' => 'Nordic Chair',
            'product-price' => '$50.00'
        ],
        [
            'image' => 'product-1.png',
            'title' => 'Nordic Chair',
            'product-price' => '$50.00'
        ],
        [
            'image' => 'product-2.png',
            'title' => 'Kruzo Aero Chair',
            'product-price' => '$78.00'
        ],
        [
            'image' => 'product-3.png',
            'title' => 'Kruzo Aero Chair',
            'product-price' => '$78.00'
        ],
        
    ];
    

    return view('layouts.shop', compact('data'));
})-> name('shop');

