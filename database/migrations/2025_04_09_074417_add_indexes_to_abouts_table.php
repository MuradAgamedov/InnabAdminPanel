<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToAboutsTable extends Migration
{
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
        });
    }
}
