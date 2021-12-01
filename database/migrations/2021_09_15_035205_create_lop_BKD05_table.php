<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopBKD05Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lop_BKD05', function (Blueprint $table) {
            $table->integer('id_sinh_vien');
            $table->string('ten-lop',50);
            
            $table->foreign('id_sinh_vien')->references('id_sinh_vien')->on('sinh_vien');
            $table->foreign('ten_lop')->references('ten_lop')->on('lop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lop_BKD05');
    }
}
