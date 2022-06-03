<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_petugas');
            $table->text('alamat_petugas');
            $table->foreignId('id_jenisKelamin')->constrained();
            $table->date('tanggalLahir_petugas');
            $table->string('username_petugas');
            $table->string('password_petugas');
            $table->string('email_petugas')->unique();
            $table->number('noHP_petugas');
            $table->foreignId('id_role')->constrained();
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
        Schema::dropIfExists('petugas');
    }
}
