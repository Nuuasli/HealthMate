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
        Schema::table('pelatihs', function (Blueprint $table) {
            $table->string('telepon')->change(); // Sesuaikan panjang sesuai kebutuhan
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelatihs', function (Blueprint $table) {
            $table->integer('telepon')->change(); // Balik ke integer jika dibatalkan
        });
    }
};
