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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable(); // untuk foto pengguna
            $table->string('home_photo')->nullable(); // untuk foto rumah
            $table->string('name');
            $table->string('nickname');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('postal_code')->nullable();
            $table->string('link_house');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
