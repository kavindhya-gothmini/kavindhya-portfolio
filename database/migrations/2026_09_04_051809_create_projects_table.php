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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();

        $table->foreignId('category_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->string('title');
        $table->string('slug')->unique();

        $table->string('short_description')->nullable();
        $table->longText('description')->nullable();

        $table->string('featured_image')->nullable();

        $table->string('technologies')->nullable();

        $table->string('github_url')->nullable();
        $table->string('live_url')->nullable();

        $table->boolean('is_featured')->default(false);
        $table->boolean('is_published')->default(true);

        $table->date('project_date')->nullable();

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
