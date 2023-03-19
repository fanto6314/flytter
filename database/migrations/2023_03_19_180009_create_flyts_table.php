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
        Schema::create('flyts', function (Blueprint $table) {
            $table->id();
            $table->string('username', 1000);
            $table->string('userHandle', 1000);
            $table->string('userLogo', 1000);
            $table->string('flytsText', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flyts');
    }
};
