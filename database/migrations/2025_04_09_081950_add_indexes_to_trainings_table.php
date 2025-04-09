<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToTrainingsTable extends Migration
{
    public function up()
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->unique('slug', 'trainings_slug_unique');
            $table->index('title');
            $table->index('status');
            $table->index('order');
            $table->index('category_id');
            $table->index('created_at');

            // Fulltext index for text-based search
            $table->fullText([
                'short_description',
                'top_text',
                'bottom_text',
                'list',
                'seo_keywords',
                'seo_description'
            ], 'trainings_text_search_fulltext');
        });
    }

    public function down()
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropUnique('trainings_slug_unique');
            $table->dropIndex(['title']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['category_id']);
            $table->dropIndex(['created_at']);

            // Drop fulltext index
            $table->dropFullText('trainings_text_search_fulltext');
        });
    }
}
