<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dukung_sakti', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp')->nullable();
            $table->string('nama')->nullable();
            $table->char('jenis_kelamin')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('tim_sukses')->nullable();
            $table->string('koordinator')->nullable();
            $table->integer('tps')->nullable();
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
        Schema::dropIfExists('dukung_sakti');
    }
};
