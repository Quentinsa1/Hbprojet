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
        Schema::create('stockist_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stockist_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('pack_id')->constrained('product_packs')->onDelete('cascade');
            $table->decimal('amount_paid', 8, 2);
            $table->string('status'); // status (ex: pending, completed, cancelled)
            $table->timestamp('purchase_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockist_purchases');
    }
};
