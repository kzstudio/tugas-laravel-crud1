<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $data = PertanyaanModel::get_all();
        return view('pertanyaan.index', ['data'=>$data]);
    }

    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $data = $request->all();
        $data['tanggal_dibuat'] = date('Y-m-d H:i:s');
        unset($data['_token']);

        $item = PertanyaanModel::save($data);

        return redirect('/pertanyaan')->with('sukses',1);
    }
}
