<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_t', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('isi');
            $table->dateTime('tanggal_dibuat');
            $table->dateTime('tanggal_diperbaharui')->nullable();
            $table->integer('userId')->nullable();
            $table->bigInteger('pertanyaanId')->unsigned(); 
            $table->integer('jumlah_like')->nullable();
            $table->integer('jumlah_dislike')->nullable();
            $table->boolean('resolved')->nullable();
            $table->integer('vote')->nullable();
            $table->foreign('pertanyaanId')
                  ->references('id')
                  ->on('pertanyaan_t')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_t');
    }
}
