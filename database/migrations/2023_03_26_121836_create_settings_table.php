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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default("RollyPups");
            $table->string('email')->default("SALES@ROLLYPUPS.com");
            $table->string('admin_name')->default("BRYAN");
            $table->string('phone')->default("+1 678-631-7877");

            $table->string('yt')->default("https://www.youtube.com/channel/UCmYhTZSzhXX3bDD9U7Y-Fhg");
            $table->string('in')->default("https://www.instagram.com/rollypups.official/");
            $table->string('wa')->default("https://web.whatsapp.com/send/?phone=16786317877");
            $table->string('text')->default("+1 678-631-7877");

            $table->boolean('teh_works')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
