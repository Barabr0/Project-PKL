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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('nama_kategori_en')->after('nama_kategori')->nullable();
        });

        Schema::table('contents', function (Blueprint $table) {
            $table->string('judul_en')->after('judul')->nullable();
            $table->text('deskripsi_en')->after('deskripsi')->nullable();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->string('nama_event_en')->after('nama_event')->nullable();
            $table->text('deskripsi_en')->after('deskripsi')->nullable();
            $table->string('lokasi_en')->after('lokasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('nama_kategori_en');
        });

        Schema::table('contents', function (Blueprint $table) {
            $table->dropColumn(['judul_en', 'deskripsi_en']);
        });

        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['nama_event_en', 'deskripsi_en', 'lokasi_en']);
        });
    }
};
