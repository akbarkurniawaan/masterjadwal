<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePenjadwalan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjadwalan', function (Blueprint $table) {
            $table->increments('id_penjadwalan');
            $table->integer('id_matkul')->unsigned();
            $table->integer('id_dosen')->unsigned();
            $table->string('hari',10);
            $table->string('jam_masuk',10);
            $table->string('jam_keluar',10);
            $table->integer('id_ruangan')->unsigned();            
            $table->timestamps();

            $table->foreign('id_matkul')
                    ->references('id_matkul')
                    ->on('matkul')
                    ->onDelete('cascade');     

            $table->foreign('id_dosen')
                    ->references('id_dosen')
                    ->on('dosen')
                    ->onDelete('cascade');  

            $table->foreign('id_ruangan')
                    ->references('id_ruangan')
                    ->on('ruangan')
                    ->onDelete('cascade');              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penjadwalan');
    }
}
