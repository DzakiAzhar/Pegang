<?php

namespace App\Http\Controllers;

use App\Models\logbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LogbookController extends Controller
{
    function logbook(){
        return view(view: 'logbook');
    }

    public function logbookPost(Request $request){

        $validator = Validator::make($request->all(),[
            'nim'        => 'required',
            'tanggal'    => 'required',
            'kegiatan'   => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nim']        = $request->nim;
        $data['tanggal']    = $request->tanggal;
        $data['kegiatan']   = $request->kegiatan;

        logbook::create($data);

        return redirect()->route('dashboard');

    }
}
