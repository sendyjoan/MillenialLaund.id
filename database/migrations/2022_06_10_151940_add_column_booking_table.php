<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking',function (Blueprint $table){
            $table->UnsignedBigInteger('mesin_id')->after('id')->nullable();
            $table->foreign('mesin_id')->references('id')->on('mesinlaundry');
            $table->UnsignedBigInteger('perlengkapan_id')->after('id')->nullable();
            $table->foreign('perlengkapan_id')->references('id')->on('perlengkapan');
            $table->UnsignedBigInteger('user_id')->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking',function (Blueprint $table){
            $table->dropColumn('mesin_id');
            $table->dropColumn('perlengkapan_id');
            $table->dropColumn('user_id');
        });
    }
}
