<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
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
    }


    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
