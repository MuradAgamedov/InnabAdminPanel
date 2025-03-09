<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('site_infos', function (Blueprint $table) {
            $table->string('header_logo_alt')->nullable();
            $table->string('footer_logo_alt')->nullable();
            $table->string('banner_image_alt')->nullable();
            $table->string('seminar_icon_alt')->nullable();
            $table->string('webinar_icon_alt')->nullable();
            $table->string('workshop_icon_alt')->nullable();
            $table->string('scholarship_icon_alt')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('site_infos', function (Blueprint $table) {
            $table->dropColumn([
                'header_logo',
                'header_logo_alt',
                'footer_logo',
                'banner_image',
                'seminar_icon',
                'webinar_icon',
                'workshop_icon',
                'scholarship_icon'
            ]);
        });
    }
};
