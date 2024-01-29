<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Intervention\image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
    $filename = $foto->getClientOriginalName();

    $manager = new ImageManager(new Driver());
    $image = $manager->read($foto);
    $image = $image->greyscale()->save(base_path('public/Img/' . $filename));
    $url = 'Img/'. $filename;



    echo (new TesseractOCR($url))->run();
    return view('testaplod', ['image' => $url]);
})->name('upload');
