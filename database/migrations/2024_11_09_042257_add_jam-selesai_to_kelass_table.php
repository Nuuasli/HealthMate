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
        Schema::table('kelass', function (Blueprint $table) {
            $table->string('jam_selesai')->nullable()->after('jam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelass', function (Blueprint $table) {
            $table->dropColumn('jam_selesai');
        });
    }
};
