<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/pizzas', function () {
    $pizzas = [
        [
            'type' => 'hawaiian',
            'base' => 'cheesy crust',
            'price' => 10
        ],
        [
            'type' => 'Italian',
            'base' => 'mushroom',
            'price' => 50
        ],
        [
            'type' => 'mexican',
            'base' => 'americano',
            'price' => 30
        ],


    ];
    return view('pizzas', ['pizzas' => $pizzas]);

    // return ['name' => 'Pak', 'age' => 45];
});
