<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelDaftarMatkul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_matkul', function (Blueprint $table) {
            $table->increments('id_daftar_matkul');
            $table->integer('id_matkul')->unsigned();
            $table->integer('id_dosen')->unsigned();           
            $table->timestamps();

            $table->foreign('id_matkul')
                    ->references('id_matkul')
                    ->on('matkul')
                    ->onDelete('cascade');     

            $table->foreign('id_dosen')
                    ->references('id_dosen')
                    ->on('dosen')
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
        Schema::drop('daftar_matkul');
    }
}
