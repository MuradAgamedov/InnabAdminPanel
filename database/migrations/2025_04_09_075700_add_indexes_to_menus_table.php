<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToMenusTable extends Migration
{
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->index('title');
            $table->index('parent_id');
            $table->index('created_at');
            $table->fullText(['seo_keywords', 'seo_description']);
        });
    }

    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropIndex(['title']);
            $table->dropIndex(['parent_id']);
            $table->dropIndex(['created_at']);
            $table->dropFullText(['seo_keywords', 'seo_description']);
        });
    }
}
