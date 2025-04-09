<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToBlogCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('blog_categories', function (Blueprint $table) {
            $table->unique('slug', 'blog_categories_slug_unique');
            $table->index('title');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
            $table->fullText(['seo_keywords', 'seo_description']);
        });
    }

    public function down()
    {
        Schema::table('blog_categories', function (Blueprint $table) {
            $table->dropUnique('blog_categories_slug_unique');
            $table->dropIndex(['title']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
            $table->dropFullText(['seo_keywords', 'seo_description']);
        });
    }
}
