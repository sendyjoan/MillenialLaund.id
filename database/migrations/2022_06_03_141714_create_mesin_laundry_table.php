<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesinLaundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesinlaundry', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mesin');
            $table->foreignId('id_cabang')->constrained();
            $table->foreignId('id_status')->constrained();
            $table->string('kapasitas');
            $table->string('kode_mesin');
            $table->double('harga_mesin');
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
        Schema::dropIfExists('mesinlaundry');
    }
}
