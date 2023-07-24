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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name")->nullable();
            $table->integer("age")->nullable();
            $table->integer("price")->nullable();
            $table->string("gender")->nullable(); # 1 for male and 2 for female
            $table->string("category")->nullable();
            $table->string("description")->nullable();
            $table->string("breed")->nullable();
            $table->string("color");
            $table->string("image")->nullable();
            $table->string("status")->nullable(); # 1 for sale, 2 sold, 3 for adoption,  1 adopted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
