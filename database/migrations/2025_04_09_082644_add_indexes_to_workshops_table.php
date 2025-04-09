<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToWorkshopsTable extends Migration
{
    public function up()
    {
        Schema::table('workshops', function (Blueprint $table) {
            // Əgər slug sütunu `text` tipindədirsə, onu unique etmək olmur, onu varchar etmək tövsiyə olunur.
            // Amma varchar olsaydı:
            // $table->unique('slug', 'workshops_slug_unique');

            $table->index('event_datetime');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('workshops', function (Blueprint $table) {
            // $table->dropUnique('workshops_slug_unique');
            $table->dropIndex(['event_datetime']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
        });
    }
}
