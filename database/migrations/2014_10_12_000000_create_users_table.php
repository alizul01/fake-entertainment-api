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
        // contoh migration file untuk User
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('blood_type');
            $table->text('address');
            $table->string('city');
            $table->string('country');
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('description');
            $table->string('phone_number');
            $table->string('profile_picture');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
