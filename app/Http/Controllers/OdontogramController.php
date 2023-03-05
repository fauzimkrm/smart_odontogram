<?php

namespace App\Http\Controllers;

use DB;
use Storage;
use App\Models\Odontogram;
use App\Models\Pasien;
use App\Models\Count;
use Illuminate\Http\Request;

class OdontogramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // dd('OKE');
        $pasien = Pasien::findOrFail($id);
        // dd($pasien);
        return view('pages.odontogram.tambah_odontogram', compact('pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->kondisi_gigi2);

        $pasien_id = $request->pasien_id;
        $dokter  = $request->dokter;
        $tanggal_kunjungan = $request->tanggal_kunjungan;
        $kondisi_gigi1 = $request->kondisi_gigi1;
        $kondisi_gigi2 = $request->kondisi_gigi2;
        $kondisi_gigi3 = $request->kondisi_gigi3;
        $kondisi_gigi4 = $request->kondisi_gigi4;
        $kondisi_gigi5 = $request->kondisi_gigi5;
        $kondisi_gigi6 = $request->kondisi_gigi6;
        $kondisi_gigi7 = $request->kondisi_gigi7;
        $kondisi_gigi8 = $request->kondisi_gigi8;
        $kondisi_gigi9 = $request->kondisi_gigi9;
        $kondisi_gigi10 = $request->kondisi_gigi10;
        $kondisi_gigi11 = $request->kondisi_gigi11;
        $kondisi_gigi12 = $request->kondisi_gigi12;
        $kondisi_gigi13 = $request->kondisi_gigi13;
        $kondisi_gigi14 = $request->kondisi_gigi14;
        $kondisi_gigi15 = $request->kondisi_gigi15;
        $kondisi_gigi16 = $request->kondisi_gigi16;
        $kondisi_gigi17 = $request->kondisi_gigi17;
        $kondisi_gigi18 = $request->kondisi_gigi18;
        $kondisi_gigi19 = $request->kondisi_gigi19;
        $kondisi_gigi20 = $request->kondisi_gigi20;
        $kondisi_gigi21 = $request->kondisi_gigi21;
        $kondisi_gigi22 = $request->kondisi_gigi22;
        $kondisi_gigi23 = $request->kondisi_gigi23;
        $kondisi_gigi24 = $request->kondisi_gigi24;
        $kondisi_gigi25 = $request->kondisi_gigi25;
        $kondisi_gigi26 = $request->kondisi_gigi26;
        $kondisi_gigi27 = $request->kondisi_gigi27;
        $kondisi_gigi28 = $request->kondisi_gigi28;
        $kondisi_gigi29 = $request->kondisi_gigi29;
        $kondisi_gigi30 = $request->kondisi_gigi30;
        $kondisi_gigi31 = $request->kondisi_gigi31;
        $kondisi_gigi32 = $request->kondisi_gigi32;

        $odontogram = new Odontogram;
        $odontogram->pasien_id = $pasien_id;
        $odontogram->dokter = $dokter;
        $odontogram->tanggal_kunjungan = $tanggal_kunjungan;
        $odontogram->kondisi_gigi = json_encode([
            'kondisigigi1' => $kondisi_gigi1,
            'kondisigigi2' => $kondisi_gigi2,
            'kondisigigi3' => $kondisi_gigi3,
            'kondisigigi4' => $kondisi_gigi4,
            'kondisigigi5' => $kondisi_gigi5,
            'kondisigigi6' => $kondisi_gigi6,
            'kondisigigi7' => $kondisi_gigi7,
            'kondisigigi8' => $kondisi_gigi8,
            'kondisigigi9' => $kondisi_gigi9,
            'kondisigigi10' => $kondisi_gigi10,
            'kondisigigi11' => $kondisi_gigi11,
            'kondisigigi12' => $kondisi_gigi12,
            'kondisigigi13' => $kondisi_gigi13,
            'kondisigigi14' => $kondisi_gigi14,
            'kondisigigi15' => $kondisi_gigi15,
            'kondisigigi16' => $kondisi_gigi16,
            'kondisigigi17' => $kondisi_gigi17,
            'kondisigigi18' => $kondisi_gigi18,
            'kondisigigi19' => $kondisi_gigi19,
            'kondisigigi20' => $kondisi_gigi20,
            'kondisigigi21' => $kondisi_gigi21,
            'kondisigigi22' => $kondisi_gigi22,
            'kondisigigi23' => $kondisi_gigi23,
            'kondisigigi24' => $kondisi_gigi24,
            'kondisigigi25' => $kondisi_gigi25,
            'kondisigigi26' => $kondisi_gigi26,
            'kondisigigi27' => $kondisi_gigi27,
            'kondisigigi28' => $kondisi_gigi28,
            'kondisigigi29' => $kondisi_gigi29,
            'kondisigigi30' => $kondisi_gigi30,
            'kondisigigi31' => $kondisi_gigi31,
            'kondisigigi32' => $kondisi_gigi32,
        ]);
        $odontogram->save();

        $count = Count::findOrFail(1);
        $count->count = 1;
        $count->save();
        return to_route('data-pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Odontogram  $odontogram
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);
        $odontogram = DB::table('odontograms')->where('pasien_id', $id)->first();
        $kondisigigi = json_decode($odontogram->kondisi_gigi, true);

        // dd($kondisigigi->kondisigigi1);
        return view('pages.odontogram.show_odontogram', compact('pasien', 'odontogram', 'kondisigigi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Odontogram  $odontogram
     * @return \Illuminate\Http\Response
     */
    public function edit(Odontogram $odontogram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Odontogram  $odontogram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $odontogram = Odontogram::findOrFail($request->odo_id);
        $kondisi_gigi = json_decode($odontogram->kondisi_gigi, true);
        $kondisi_gigi_new = [];
        $keyNew = '';
        foreach($kondisi_gigi as $key => $value){
            if($key == $request->key){
                $kondisi_gigi_new = array_merge($kondisi_gigi_new, [$key => $request->status]);
                $keyNew = $key;
            }else{
                $kondisi_gigi_new = array_merge($kondisi_gigi_new, [$key => $value]);
            }
        }

        if(!empty($request->image)){
            $image = $request->image;
            $norm = $odontogram->pasien->no_rekam_medik;

            $folderPath = "public/images/" . $norm . "/";
            $image_parts = explode(";base64,", $image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $fileName = $keyNew . ".png";
            $file = $folderPath . $fileName;
            Storage::put($file, $image_base64);

        }
        $odontogram->kondisi_gigi = json_encode($kondisi_gigi_new);
        $odontogram->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Odontogram  $odontogram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Odontogram $odontogram)
    {
        //
    }

    public function update_kunjungan(Request $request)
    {
        $kunjungan = Odontogram::findOrFail($request->id);

        $kunjungan->dokter = $request->dokter;
        $kunjungan->tanggal_kunjungan = $request->tanggal_kunjungan;
        $kunjungan->save();

        return redirect()->back();
    }
}
