<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel{

	public static function get_all(){
		$items = DB::table('jawaban_t')->get();
		
		return $items;
	}

	public static function get_all_by_pertanyaan($pertanyaanId){
		$items = DB::table('jawaban_t')->where("pertanyaanId",$pertanyaanId)->get();
		
		return $items;
	}
	
	public static function save($data){
		$new_items = DB::table('jawaban_t')->insert($data);

		return $new_items;
	}
}