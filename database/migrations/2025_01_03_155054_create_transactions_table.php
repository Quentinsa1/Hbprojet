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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['credit', 'debit']); // Définir un type de transaction
            $table->foreignId('from_user_id')->constrained('users')->onDelete('cascade'); // Utilisateur d'origine
            $table->foreignId('to_user_id')->constrained('users')->onDelete('cascade'); // Utilisateur destinataire
            $table->decimal('amount', 10, 2); // Montant de la transaction
            $table->enum('status', ['pending', 'completed', 'failed']); // Statut de la transaction
            $table->timestamps(); // Pour les champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
