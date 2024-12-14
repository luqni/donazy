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
        Schema::create('table_partnerships', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lembaga'); // Kolom string
            $table->string('jenis_lembaga'); // Kolom string
            $table->string('nama_penanggung_jawab'); // Kolom string
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('alamat')->nullable(); // Kolom text, bisa null
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
        Schema::dropIfExists('table_partnerships');
    }
};
