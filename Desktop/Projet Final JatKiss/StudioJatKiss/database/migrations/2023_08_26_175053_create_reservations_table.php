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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->unsignedBigInteger('prestation_id');
            $table->timestamps();

            // Ajouter des contraintes de clé étrangère si nécessaire
            $table->foreign('user_id')->references('id')->on('users');
            // Ajoutez d'autres contraintes si besoin

            $table->index('user_id');
            $table->index('prestation_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
