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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->string('username', 1000);
            $table->string('userLogo', 1000)->default("https://via.placeholder.com/50");
            $table->string('userBanner', 1000)->default("https://social.webestica.com/assets/images/bg/01.jpg");
            $table->string('userPost', 1000)->default(0);
            $table->string('userFollowers', 1000)->default(0);
            $table->string('userFollowing', 1000)->default(0);
            $table->string('userRole', 1000)->default("user");
            $table->string('useDescription', 1000)->default("Hey there! I am using Flyts.");
            $table->string('password', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
