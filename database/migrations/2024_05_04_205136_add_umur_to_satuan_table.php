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
        Schema::table('tblsatuan', function (Blueprint $table) {
            $table->string('umur')->length(10)->nullable()->after('nama');
            $table->string('alamat')->length(50)->nullable()->after('umur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tblsatuan', function (Blueprint $table) {
            //
        });
    }
};
