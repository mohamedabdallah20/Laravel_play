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
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();

            // long way
            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')->references('id')->on('posts');

            //short way
            $table->foreignId('post_id')
                    ->constrained('posts')
                    ->references('id');

            // long way
            // $table->unsignedBigInteger('tag_id');
            // $table->foreign('tag_id')->references('id')->on('tags');

            // short way
            $table->foreignId('tag_id')
                  ->constrained('tags')
                  ->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
