<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemdanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diem_danh', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sinh_vien');
            $table->integer('id_lich_hoc');
            $table->timestamp('ngay_tao');
            $table->text('note');
            $table->integer('trang_thai');// 1= đi hoc ,0 =nghỉ -1= đi muộn,2 = phép

            $table->foreign('id_sinh_vien')->references('id_sinh_vien')->on('sinh_vien');
            $table->foreign('id_lich_hoc')->references('id_lich_hoc')->on('lich_hoc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diem_danh');
    }
}
