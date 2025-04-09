<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToPrivaciesTable extends Migration
{
    public function up()
    {
        Schema::table('privacies', function (Blueprint $table) {
            $table->index('page_title');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('privacies', function (Blueprint $table) {
            $table->dropIndex(['page_title']);
            $table->dropIndex(['created_at']);
        });
    }
}
