<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histori', function (Blueprint $table) {
            $table->increments('id');
            $table->string("uid")->unique();
            $table->bigInteger("total_harga");
            $table->bigInteger("saldo_awal");
            $table->bigInteger("saldo_akhir");
            $table->string("status");
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
        Schema::dropIfExists('historis');
    }
}
