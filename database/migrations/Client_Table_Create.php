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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('client_name');
            $table->text('client_description');
            $table->string('client_sector');
            $table->string('client_phone');
            $table->string('client_address_1');
            $table->string('client_address_2');
            $table->string('client_city');
            $table->string('client_region');
            $table->string('client_zipcode');
            $table->string('client_country');
            $table->string('client_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
