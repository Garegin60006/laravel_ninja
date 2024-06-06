<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/pizzas', function () {
    $pizza = [
        'type' => 'hawaiian', 
        'base' => 'cheesy crust',
        'price' => 10
      ];
    return view('pizzas', $pizza);

    // return ['name' => 'Pak', 'age' => 45];
});
