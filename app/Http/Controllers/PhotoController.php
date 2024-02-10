<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Intervention\Image\Encoders\WebpEncoder;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Photo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        ini_set('memory_limit', '256M');
        try {
            // dd($request);
            $images = $request->file('images');
            $texts = $request->input('text');

            // dd($images);

            $date = date('d-m-Y');

            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $manager = new ImageManager(new Driver());
                $read = $manager->read($image);
                $exif = $read->exif();
                $converted = $read->toWebp();

                $path = 'uploads'.$date.'/' . $filename . '.webp';
                $saved = Storage::disk('public')->put($path, $converted->__toString());

                dd([
                    'name' => $filename,
                    'image' => $saved,
                    'text' => $exif
                ]);

                // $path = Storage::disk('public')->put('uploads'.$date.'/'.$filename, $converted);
            }

            // Process $images and $texts as needed
            // Save them to your database

            return response()->json(['success' => true, 'message' => 'Images and texts uploaded successfully']);
        } catch (Exception $e) {
            Log::error('Error processing request: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Internal Server Error'], 500);
        }
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
