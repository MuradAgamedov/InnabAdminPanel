<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToBlogContentsTable extends Migration
{
    public function up()
    {
        Schema::table('blog_contents', function (Blueprint $table) {
            $table->unique('slug', 'blog_contents_slug_unique');
            $table->index('title');
            $table->index('blog_id');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
            $table->fullText(['text']);
        });
    }

    public function down()
    {
        Schema::table('blog_contents', function (Blueprint $table) {
            $table->dropUnique('blog_contents_slug_unique');
            $table->dropIndex(['title']);
            $table->dropIndex(['blog_id']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
            $table->dropFullText(['text']);
        });
    }
}
