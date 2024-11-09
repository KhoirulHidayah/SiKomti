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
        Schema::create('m_jenis_tugas', function (Blueprint $table) {
            $table->id('id_tugas');
            $table->string('jenis_tugas', 100);
            $table->unsignedBigInteger('id_kompetensi')->nullable();
            $table->timestamps();

            $table->foreign('id_kompetensi')->references('id_Kompetensi')->on('m_bidang_kompetensi')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_jenis_tugas');
    }
};
