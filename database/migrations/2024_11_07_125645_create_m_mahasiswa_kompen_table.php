<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_mahasiswa_kompen', function (Blueprint $table) {
            $table->id('id_MahasiswaKompen')->autoIncrement();
            $table->string('ni', 18)->nullable();
            $table->char('UUID_Kompen', 36)->nullable();
            $table->boolean('status_Acc')->nullable();
            $table->timestamps();

            // Pastikan kolom ni diindeks sebelum menambahkan foreign key
            $table->index('ni');

            // Definisikan foreign key
            $table->foreign('ni')->references('ni')->on('m_user')->onDelete('cascade');
            $table->foreign('UUID_Kompen')->references('UUID_Kompen')->on('t_kompen')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_mahasiswa_kompen');
    }
};
