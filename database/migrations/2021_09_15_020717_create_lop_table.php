<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lop', function (Blueprint $table) {
            $table->increments('id_lop');
            $table->string('ten_lop',50);
            // $table->foreignId('id_giao_vien')->constrained();
            // $table->unsignedinteger('id_giao_vien');
            // $table->foreign('id_giao_vien')->references('id_giao_vien')->on('giao_vien');
            // $table->text('note');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lop');
    }
}
