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
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prodi')->nullable();
            $table->integer('jenis')->nullable();
            $table->string('nama')->nullable();
            $table->string('nim')->nullable();
            $table->string('email')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('lingkup_aspirasi')->nullable();
            $table->string('sasaran_aspirasi')->nullable();
            $table->string('pesan')->nullable();
            $table->string('lampiran')->nullable();
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
        Schema::dropIfExists('aspirasi');
    }
};
