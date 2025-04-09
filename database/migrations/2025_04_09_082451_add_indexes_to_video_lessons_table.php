<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToVideoLessonsTable extends Migration
{
    public function up()
    {
        Schema::table('video_lessons', function (Blueprint $table) {
            $table->unique('slug', 'video_lessons_slug_unique');
            $table->index('title');
            $table->index('status');
            $table->index('order');
            $table->index('category_id');
            $table->index('created_at');

            $table->fullText([
                'short_description',
                'seo_keywords',
                'seo_description'
            ], 'video_lessons_text_fulltext');
        });
    }

    public function down()
    {
        Schema::table('video_lessons', function (Blueprint $table) {
            $table->dropUnique('video_lessons_slug_unique');
            $table->dropIndex(['title']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['category_id']);
            $table->dropIndex(['created_at']);

            $table->dropFullText('video_lessons_text_fulltext');
        });
    }
}
