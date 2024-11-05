<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    public function up(): void
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('UUID');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('country_delivery')->nullable();
            $table->string('fname_delivery')->nullable();
            $table->string('lname_delivery')->nullable();
            $table->string('address_delivery')->nullable();
            $table->string('phone_delivery')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('worker_id')->nullable();
            $table->string('price')->nullable();
            $table->timestamp('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
