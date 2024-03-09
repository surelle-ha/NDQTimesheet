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
            $table->string('internal_id');
            $table->string('external_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthday');
            $table->string('gender');
            $table->string('position');
            $table->text('description');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('city');
            $table->string('zipcode');
            $table->string('country');
            $table->string('contact_number');
            $table->string('emergency_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->string('status');
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
