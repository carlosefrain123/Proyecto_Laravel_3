<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     */
    //TODO: Se crea la migración con este comando:
    //php artisan make:migration create_speciality_user_table
    public function up(): void
    {
        Schema::create('speciality_user', function (Blueprint $table) {
            $table->id();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speciality_user');
    }
};
