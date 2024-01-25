<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use thiagoalessio\TesseractOCR\TesseractOCR;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aplod', function(){
    return view('testaplod');
});

Route::post('store', function(){
    $foto = request()->foto;
    $filename = $foto->getPathName();
    // dd($filename);



    echo (new TesseractOCR($filename))->run();
    return view('testaplod');
})->name('upload');
