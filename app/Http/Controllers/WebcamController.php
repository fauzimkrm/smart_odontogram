<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Storage;

class WebcamController extends Controller
{
    public function index()
    {
        return view('pages/webcam');
    }

    public function store(Request $request)
    {
        $img = $request->image;
        // dd($img);
        $folderPath = "public/images/";

        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);
        $fileName = 'graham.png';

        $file = $folderPath . $fileName;
        Storage::put($file, $image_base64);

        return redirect()->back()->with('alert', 'Gambar Tersimpan');
    }

    public function classify()
    {
        $image = asset('storage/images/graham.png');

        $request = Http::attach('file', file_get_contents($image), 'image.png')
            ->post('http://localhost:5000/upload');

        return $request;
    }
}
