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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('short_review')->nullable();
            $table->string('detail_review')->nullable();
            $table->integer('rating')->nullable();
            $table->json('review_meta')->nullable();
            $table->foreignId('reviewer_id')->constrained('reviewers');
            $table->foreignId('entity_id')->constrained('entities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
