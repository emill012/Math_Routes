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

Route::get('/', function () {
    $message = "Let's Do Math!";
    return $message;
});

Route::get('/math/add/{x}/{y}', function ($x,$y) {
    $message = $x+$y;
    return "$x + $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/math/subtract/{x}/{y}', function ($x,$y) {
    $message = $x-$y;
    return "$x - $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/math/multiply/{x}/{y}', function ($x,$y) {
    $message = $x*$y;
    return "$x x $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/math/divide/{x}/{y}', function ($x,$y) {
    $message = $x/$y;
    return "$x / $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/function/sqrt/{x}', function ($x) {
    $message = sqrt($x);
    return "Square Root of $x = $message";
})->where = ('x','[-\+]?[0-9]+');

Route::get('/function/log/{x}', function ($x) {
    $message = log10($x);
    return "The log of x = $message";
})->where = ('x','[-\+]?[0-9]+');

Route::get('/constant/PI', function () {
    $message = pi();
    return "PI = $message";
});

Route::get('/constant/e', function () {
    $message = M_E;
    return "Constant of e = $message";
});

Route::get('/random', function () {
    echo rand();
});

Route::get('/random/{high}', function ($high) {
    echo rand(1,$high);
});

Route::get('/random/{low}/{high}', function ($low,$high) {
    echo rand($low,$high);
});