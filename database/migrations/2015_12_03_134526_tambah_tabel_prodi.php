<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahTabelProdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daftar_matkul', function (Blueprint $table) {
            //
            $table->integer('id_prodi')->unsigned()->after('id_dosen');  

            $table->foreign('id_prodi')
                    ->references('id_prodi')
                    ->on('prodi')
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
        Schema::table('daftar_matkul', function (Blueprint $table) {
            //
                $table->dropColumn('id_prodi');              
        });
    }
}
