<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('icon_alt')->nullable();
            $table->string('image_alt')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn(['icon_alt', 'image_alt']);
        });
    }
};
