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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                                           // Clé primaire auto-incrémentée
            $table->string('name');                                 // VARCHAR(255)
            $table->string('slug')->unique();                       // Valeur unique
            $table->text('description')->nullable();                //Peut être null
            $table->timestamps();                                   // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
