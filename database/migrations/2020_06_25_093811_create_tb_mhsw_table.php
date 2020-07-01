<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMhswTable extends Migration
{


    public function up()
{
    $chema::create('tb_mhsw', fuction (Blueprint $table){
    $table->increments('mhsw_id');
    $table->string('mhsw_nim');
    $table->string('mhsw_jurusan');
    $table->string('mhsw_alamat');
    $table->timestamps();

});
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mhsw');
    }
}
