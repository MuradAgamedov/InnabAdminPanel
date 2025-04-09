<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToVideoLessonsTitlesTable extends Migration
{
    public function up()
    {
        Schema::table('video_lessons_titles', function (Blueprint $table) {
            $table->unique('slug', 'video_lessons_titles_slug_unique');
            $table->index('title');
            $table->index('lesson_id');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('video_lessons_titles', function (Blueprint $table) {
            $table->dropUnique('video_lessons_titles_slug_unique');
            $table->dropIndex(['title']);
            $table->dropIndex(['lesson_id']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
        });
    }
}
