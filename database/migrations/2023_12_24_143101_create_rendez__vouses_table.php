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
        Schema::create('rendez__vouses', function (Blueprint $table) {
            $table->id();
            $table->date('date_rendez_vous');
            $table->time('Heure_rendez_vous');
            $table->unsignedBigInteger('id_pat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez__vouses');
    }
};
