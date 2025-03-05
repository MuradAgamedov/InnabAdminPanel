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
        Schema::create('calculators', function (Blueprint $table) {
            $table->id();
            $table->longText("professions")->nullable();
            $table->longText("where_innab")->nullable();
            $table->longText("where_own")->nullable();
            $table->longText("where_other")->nullable();
            $table->longText("english_elementry")->nullable();
            $table->longText("english_medium")->nullable();
            $table->longText("english_hard")->nullable();
            $table->longText("comp_elementry")->nullable();
            $table->longText("comp_medium")->nullable();
            $table->longText("comp_hard")->nullable();
            $table->longText("experience_0")->nullable();
            $table->longText("experience_0_1")->nullable();
            $table->longText("experience_1_3")->nullable();
            $table->longText("experience_3_5")->nullable();
            $table->longText("experience_5_10")->nullable();
            $table->longText("experience_10_plus")->nullable();
            $table->integer('order')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculators');
    }
};
