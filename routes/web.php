<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Intervention\image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;

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

<<<<<<< HEAD
Route::controller(PhotoController::class)->group(function(){
    Route::get('/photos', 'index');
    Route::post('/photos/upload', 'store');
});
=======
Route::get('/aplod', function(){
    return view('testaplod');
});

Route::post('store', function(){
    $foto = request()->foto;
    $filename = $foto->getClientOriginalName();

    $manager = new ImageManager(new Driver());
    $image = $manager->read($foto);
    $exif = $image->exif();
    // dd($exif);
    // $image = $image->encode(new WebpEncoder(quality: 65));
    $image = $image->toWebp()->save(base_path('public/Img/test.webp'));
    // dd($image);
    // $image = $image-->>greyscale()->save(base_path('public/Img/' . $filename));
    $url = 'Img/test.webp';



    //Penamaan masih hardcode blm otomatis



    // echo (new TesseractOCR($url))->run();
    return view('testaplod', ['image' => $url]);
})->name('upload');
>>>>>>> hapis
