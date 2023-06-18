<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_games', function (Blueprint $table) {
            $table->id();
            $table->string('game_title');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('developer');
            $table->string('genre');
            $table->string('platform');
            $table->string('game_engine');
            $table->string('publisher');
            $table->text('platforms');
            $table->bigInteger('sales');
            $table->year('release_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_games');
    }
};
