<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AbsensiController extends Controller
{
    function absensi(){
        return view(view: 'absensi');
    }

    public function store(Request $request){
        $name = Auth::guard('users')->user()->name;
        $tgl_absen = date("Y-m-d");
        $jam = date("H:i:s");
        $lokasi = $request->lokasi;
        $image = $request->image;
        $folderPath = "public/upload/absensi";
        $formatName = $name . "-" . $tgl_absen;
        $image_parts = explode(";base64", $image);
        $image_base64 = base64_decode($image_parts[1]);
        $fileName =$formatName . ".png";
        $file = $folderPath . $fileName;
        $data = [
            'name'=> $name,
            'tgl_absen' => $tgl_absen,
            'jam_masuk' => $jam,
            'foto_masuk'=> $fileName,
            'lokasi_masuk' => $lokasi,
        ];
        $simpan = DB::table('absen')->insert($data);
        if($simpan){
            echo 0;
            Storage::put($file, $image_base64);
        }else{
            echo 1;
        }
        
      
    }
}
