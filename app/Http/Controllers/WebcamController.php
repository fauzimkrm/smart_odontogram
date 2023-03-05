<?php

namespace App\Http\Controllers;

use App\Models\Count;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Psy\Readline\Hoa\Console;
use Storage;

class WebcamController extends Controller
{
    public static $count = 1;

    public function index()
    {
        return view('pages/webcam');
    }

    public function store(Request $request)
    {
        $count = Count::findOrFail(1);
        // $inc = $count->count;

        $img = $request->image;
        $norm = $request->no_rekam_medik;

        $folderPath = "public/images/" . $norm . "/";
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = "kondisigigi" . $count->count . ".png";
        $count->count = $count->count + 1;
        $count->save();
        $file = $folderPath . $fileName;
        Storage::put($file, $image_base64);

        $request = Http::attach('file',$image_base64 , 'image.png')->post('http://localhost:5000/upload');
        

        return $request;
        


        // return response()->json([
        //     'status'=>true,
        //     'data'=>$request
        // ]);

        // return redirect()->back()->with('alert', 'Gambar Tersimpan');
    }
}
