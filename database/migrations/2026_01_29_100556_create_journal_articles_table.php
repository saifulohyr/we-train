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
        Schema::create('journal_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_zh')->nullable();
            $table->text('abstract');
            $table->text('abstract_zh')->nullable();
            $table->string('author');
            $table->date('published_at');
            $table->string('pdf_url')->nullable();
            $table->string('doi')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_articles');
    }
};
