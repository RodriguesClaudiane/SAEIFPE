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
        Schema::create('posts_ifpes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('send_to');
            $table->foreignId('user_id')
                ->references('id')
                ->on('users');
            $table->boolean('visible')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_ifpes');
    }
};
