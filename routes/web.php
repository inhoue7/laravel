<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//php artisan make:controller FruitsController
Route::get('/fruits', 'FruitsController@index');
Route::get('/fruits/{fruit}', 'FruitsController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    //return view('about', ['fname' => 'Tom', 'lname' => 'Smith']);
    
    
    $fname = 'Tom';
    $lname = 'Scott';          

    //return view('about', compact('fname', 'lname'));
    

    //$fruits = ['apple', 'orange', 'banana'];
    //return view('about', compact('fname','lname','fruits'));

    $fruits = DB::table('fruits')->get();

    return view('about', compact('fname','lname','fruits'));
    
});

/*
//Moved to the FruitsController
Route::get('/fruits', function () { // fruits in this line is on the url, we  can change it

    //$fruits = DB::table('fruits')->get(); //same as $fruits = App\Fruit::all();

    //Create the Fruit model: php artisan make:model Fruit
    $fruits = App\Fruit::all(); //App id the name space, Fruit is the model (under app)

    return view('fruits.index', compact('fruits')); //fruit.index map to the file system
});

Route::get('/fruits/{fruit}', function ($id) {

    //$fruit = DB::table('fruits')->find($id);

    $fruit = App\Fruit::find($id);

    return view('fruits.show', compact('fruit'));  //or fruit.show
});
*/