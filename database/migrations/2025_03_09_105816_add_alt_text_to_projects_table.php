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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('icon_alt_text')->nullable(); // icon sahəsindən sonra
            $table->string('product_image_alt_text')->nullable(); // product_image sahəsindən sonra
            $table->string('qrcode_image_alt_text')->nullable(); // qrcode_image sahəsindən sonra
            $table->string('mobile_qrcode_image_alt_text')->nullable(); // qrcode_image sahəsindən sonra
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['icon_alt_text', 'product_image_alt_text', 'qrcode_image_alt_text']);
        });
    }
};
