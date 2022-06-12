<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCabangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mesinlaundry',function (Blueprint $table){
            $table->UnsignedBigInteger('cabang_id')->after('nama')->nullable();
            $table->foreign('cabang_id')->references('id')->on('cabangs');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mesinlaundry',function (Blueprint $table){
            $table->dropColumn('cabang_id');
            $table->dropColumn('status');
        });
    }
}
