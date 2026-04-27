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
            $table->string('gambar')->nullable()->after('slug');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('gambar');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('foto');
        });
    }
};
