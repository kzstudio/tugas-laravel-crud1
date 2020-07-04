<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel{

	public static function get_all(){
		$items = DB::table('pertanyaan_t')->get();
		
		return $items;
	}

	public static function get_by_pk($id){
		$items = DB::table('pertanyaan_t')->where('id',$id)->first();
		
		return $items;
	}
	
	public static function save($data){
		$new_items = DB::table('pertanyaan_t')->insert($data);

		return $new_items;
	}

	public static function ubah($id, $data){
		$up_items = DB::table('pertanyaan_t')->where('id',$id)->update($data);

		return $up_items;
	}

	public static function hapus($id){
		$del_items = DB::table('pertanyaan_t')->where('id',$id)->delete();

		return $del_items;
	}
}