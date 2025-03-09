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
        Schema::table('header_datas', function (Blueprint $table) {
            $table->string('icon_alt_text')->nullable(); // 'icon' sütunundan sonra əlavə edilir
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('header_datas', function (Blueprint $table) {
            $table->dropColumn('icon_alt_text');
        });
    }
};
