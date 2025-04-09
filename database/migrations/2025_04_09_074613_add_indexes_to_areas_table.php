<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToAreasTable extends Migration
{
    public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->index('area_name');
            $table->index('parent_id');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->dropIndex(['area_name']);
            $table->dropIndex(['parent_id']);
            $table->dropIndex(['created_at']);
        });
    }
}
