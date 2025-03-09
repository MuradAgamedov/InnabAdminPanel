<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('corporatives', function (Blueprint $table) {
            $table->string('banner_alt_text')->nullable(); // banner sahəsindən sonra
            $table->string('image_alt_text')->nullable(); // image sahəsindən sonra
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('corporatives', function (Blueprint $table) {
            $table->dropColumn(['banner_alt_text', 'image_alt_text']);
        });
    }
};
