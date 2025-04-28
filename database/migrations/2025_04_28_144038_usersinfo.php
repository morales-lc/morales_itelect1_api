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
        //

        Schema::create('usersinfo', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique(); // 👈 ADD THIS
            $table->string('email')->unique()->nullable(); // Optional if you want email later
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
