<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index($pertanyaanId){
        $data = JawabanModel::get_all_by_pertanyaan($pertanyaanId);
        $pertanyaan = PertanyaanModel::get_by_pk($pertanyaanId);
        return view('jawaban.index', ['data'=>$data,'pertanyaanId'=>$pertanyaanId,'pertanyaan'=>$pertanyaan]);
    }


    public function store(Request $request, $pertanyaanId){
        $data = $request->all();
        $data['tanggal_dibuat'] = date('Y-m-d H:i:s');
        $data['pertanyaanId'] = $pertanyaanId;
        unset($data['_token']);

        $item = JawabanModel::save($data);

        return redirect('/jawaban/'.$pertanyaanId)->with('sukses',1);
    }
}
