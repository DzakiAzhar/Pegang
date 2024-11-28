<?php

namespace App\Http\Controllers;

use App\Models\Pemagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PemagangController extends Controller
{
    function pemagang(){
        return view(view: 'pemagang');
    }


    public function pemagangPost(Request $request){
        $validator = Validator::make($request->all(),[
            'name'        => 'required',
            'nim'         => 'required',
            'jurusan'     => 'required',
            'instansi'    => 'required',
            'email'       => 'required',
            'lama_magang' => 'required',
            'proposal'    => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['name']        = $request->name;
        $data['nim']         = $request->nim;
        $data['jurusan']     = $request->jurusan;
        $data['instansi']    = $request->instansi;
        $data['email']       = $request->email;
        $data['lama_magang'] = $request->lama_magang;
        $data['proposal']    = $request->proposal;

        Pemagang::create($data);

        return redirect()->route('welcome');

    }


}