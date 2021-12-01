<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichHocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_hoc', function (Blueprint $table) {
            $table->increments('id_lich_hoc');
            $table->integer('id_mon_hoc');
            $table->integer('id_buoi_hoc');
            $table->integer('id_giao_vien');
            $table->date('bat_dau');
            $table->date('ket_thuc');
            
            $table->foreign('id_giao_vien')->references('id_giao_vien')->on('giao_vien');
            $table->foreign('id_mon_hoc')->references('id_mon_hoc')->on('mon_hoc');
            $table->foreign('id_buoi_hoc')->references('id_buoi_hoc')->on('buoi_hoc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_hoc');
    }
}
