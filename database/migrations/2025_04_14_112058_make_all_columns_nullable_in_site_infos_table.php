<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('site_infos', function (Blueprint $table) {
            $table->text('facebook_link')->nullable()->change();
            $table->text('instagram_link')->nullable()->change();
            $table->text('linkedin_link')->nullable()->change();
            $table->text('tiktok_link')->nullable()->change();
            $table->text('youtube_link')->nullable()->change();
            $table->string('phone1')->nullable()->change();
            $table->string('phone2')->nullable()->change();
            $table->string('phone3')->nullable()->change(); // bu sətir problemi həll edir
            $table->string('email1')->nullable()->change();
            $table->string('email2')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->longText('map')->nullable()->change();
            $table->string('header_logo_alt')->nullable()->change();
            $table->string('footer_logo_alt')->nullable()->change();
            $table->string('banner_image_alt')->nullable()->change();
            $table->string('seminar_icon_alt')->nullable()->change();
            $table->string('webinar_icon_alt')->nullable()->change();
            $table->string('workshop_icon_alt')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('site_infos', function (Blueprint $table) {
            // Burada əvvəlki vəziyyətə qaytarmaq üçün dəyişikliklər edə bilərsən, əgər istəyirsənsə
            // Məs: $table->string('phone3')->nullable(false)->change();
        });
    }
};
