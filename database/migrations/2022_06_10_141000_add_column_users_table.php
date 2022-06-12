<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function (BLueprint $table){
            $table->string('username',20)->after('id')->nullable()->unique();
            $table->date('tanggal_lahir')->after('email')->nullable();
            $table->string('alamat')->after('tanggal_lahir')->nullable();
            $table->double('nomer_hp')->after('alamat')->nullable();
            $table->UnsignedBigInteger('role_id')->after('email')->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $table){
            $table->dropColumn('username');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('alamat');
            $table->dropColumn('nomer_hp');
            $table->dropColumn('role_id');
        });
    }
}
