<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('petugas', function (Blueprint $table){
            $table->unsignedBigInteger('id_jenisKelamin')->after('nama_petugas')->nullable();
            $table->foreign('id_jenisKelamin')->references('id')->on('jenisKelamin');

            $table->unsignedBigInteger('id_role')->after('noHP_petugas')->nullable();
            $table->foreign('id_role')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('petugas', function (Blueprint $table){
            $table->dropColumn('id_jenisKelamin');
            $table->dropColumn('id_role');
        });
    }
}
