<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->timestamps();

            $table->bigIncrements('id');
            $table->string('nik', 20);
            $table->string('nama', 50);
            $table->string('alamat', 25);
            $table->string('email', 50);
            $table->integer('divisi')->unsigned();
            $table->string('foto', 50);
            $table->timestamps();

            $table->foreign('divisi')->references('id_div')->on('divisi')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
