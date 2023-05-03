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

Route::get('/', function () {

    $data = [
        'comics' => config('comics'),
    ];

    return view('home', $data);
});

Route::get('/comics_single/{index}', function($index) {

    $comics = config('comics'); 

    if ($index > count($comics) - 1) {
        abort(404);
    }

    $comics_single = $comics[$index]; 

    return view('comics_single', compact('comics_single'));
})->name('comics_single')->where('index', '[0-9]+');