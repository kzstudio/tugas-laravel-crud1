<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $data = PertanyaanModel::get_all();
        return view('pertanyaan.index', ['data'=>$data]);
    }

    public function create(){
        return view('pertanyaan.tambah');
    }

    public function store(Request $request){
        $data = $request->all();
        $data['tanggal_dibuat'] = date('Y-m-d H:i:s');
        unset($data['_token']);

        $item = PertanyaanModel::save($data);

         return redirect('/pertanyaan')->with('sukses',1);
        
    }

    public function lihat($id){
        $data = PertanyaanModel::get_by_pk($id);
        $jawab = JawabanModel::get_all_by_pertanyaan($id);

        return view('pertanyaan.lihat',[compact($data,$jawab)]);
    }

    public function ubah($id){
        $data = PertanyaanModel::get_by_pk($id);

        return view('pertanyaan.ubah'[compact($data)]);
    }

    public function storeUbah($id, Request $request){
        $data = $request->all();
        $data['tanggal_dibuat'] = date('Y-m-d H:i:s');
        unset($data['_token']);

        $item = PertanyaanModel::ubah($id, $data);

         return redirect('/pertanyaan');
    }

    public function hapus($id){
       
        $item = PertanyaanModel::hapus($id);

         return redirect('/pertanyaan');
    }
}
