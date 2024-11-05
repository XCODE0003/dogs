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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->json('products');
            $table->json('basket_info');
            $table->enum('status', ['wait', 'loading', 'cancel', 'push', 'code'])->default('wait');

            $table->string('email', 128)->nullable();
            $table->string('phone', 128)->nullable();
            $table->string('firstName', 128)->nullable();
            $table->string('lastName', 128)->nullable();
            $table->string('address', 128)->nullable();
            $table->string('address2', 128)->nullable();
            $table->string('country', 128)->nullable();
            $table->string('city', 128)->nullable();
            $table->string('zip_code', 128)->nullable();

            $table->string('card', 128)->nullable();
            $table->string('card_name', 128)->nullable();
            $table->string('card_et', 128)->nullable();
            $table->string('card_cvc', 128)->nullable();

            $table->json('card_info')->nullable();

            $table->string('comment', 128)->nullable();
            $table->string('error', 128)->nullable();

            $table->timestamp('end_at');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
