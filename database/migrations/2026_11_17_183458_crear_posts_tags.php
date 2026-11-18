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
        Schema::create('posts_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id','fk_posttags_post')->references('id')->on('posts')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id','fk_posttags_tag')->references('id')->on('tags')->onDelete('cascade')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};
