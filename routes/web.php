<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $comics = (config('comics'));
    // dd($comics);
    return view('home',['comics' => $comics]);
});
Route::get('product/{id}', function ($id) {
    $comics = (config('comics'));

    if($id >= count($comics)){
        abort('404');
    }
    $product = $comics[$id];
    dd($product);
     return view('product',['comics' => $comics]);
})->where('id','[0-9]+');
