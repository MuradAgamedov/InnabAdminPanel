<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToCorporativesTable extends Migration
{
    public function up()
    {
        Schema::table('corporatives', function (Blueprint $table) {
            $table->index('banner_title');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('corporatives', function (Blueprint $table) {
            $table->dropIndex(['banner_title']);
            $table->dropIndex(['created_at']);
        });
    }
}
