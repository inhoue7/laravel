<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fruit;  //Have to use this!

class FruitsController extends Controller
{
    public function index()
    {
        $fruits = Fruit::all(); //App id the name space, Fruit is the model (under app)

        return view('fruits.index', compact('fruits')); //fruit.index map to the file system
    }

    //public function show($id)
    public function show(Fruit $fruit)    
    {
        //$fruit = Fruit::find($id);

        return view('fruits.show', compact('fruit'));  //or fruit.show
    }
}
