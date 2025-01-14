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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->unique();
            // $table->timestamp('mobile_verified_at')->nullable();
            // $table->string('mobile_verify_code')->nullable();
            // $table->tinyInteger('mobile_attempts_left')->default(0);
            // $table->timestamp('mobile_last_attempt_data')->nullable();
            // $table->timestamp('mobile_verify_code_send_at')->nullable();
            $table->string('age');
            $table->string('password');
            $table->rememberToken();
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
