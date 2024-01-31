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
        Schema::create('portafolioitems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portafolio_id')->constrained('portafolios')->cascadeOnDelete();
            $table->foreignId('item_id')->constrained('items')->cascadeOnDelete();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portafolioitems');
    }
};
