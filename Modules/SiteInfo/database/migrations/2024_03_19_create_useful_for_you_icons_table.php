<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('useful_for_you_icons', function (Blueprint $table) {
            $table->id();
            $table->string('type')->comment('video_lessons, blog, career_calculator, seminars_webinars, workshop, scholarship_programs');
            $table->string('icon')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('useful_for_you_icons');
    }
}; 