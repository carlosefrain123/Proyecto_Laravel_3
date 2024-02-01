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
            //TODO: Se crea las llaves foraneas
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //
            $table->unsignedBigInteger('speciality_id');
            $table->foreign('speciality_id')->references('id')->on('specialities');
            //todo: Luego de eso ejecutamos el comando de la migración: php artisan migrate
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
