<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan_t', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul',30);
            $table->text('isi');
            $table->dateTime('tanggal_dibuat');
            $table->dateTime('tanggal_diperbaharui')->nullable();
            $table->integer('userId')->nullable();
            $table->integer('jumlah_like')->nullable();
            $table->integer('jumlah_dislike')->nullable();
            $table->integer('vote')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan_t');
    }
}
