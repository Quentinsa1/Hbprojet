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
        Schema::create('sponsorships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sponsor_id')->constrained('users')->onDelete('cascade'); // Utilisateur sponsor
            $table->foreignId('distributor_id')->constrained('users')->onDelete('cascade'); // Utilisateur distribué
            $table->timestamp('sponsored_at')->nullable(); // Date du parrainage
            $table->integer('level')->default(1); // Niveau du parrainage
            $table->timestamps(); // Pour les champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorships');
    }
};
