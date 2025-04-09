<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToTrainingCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('training_categories', function (Blueprint $table) {
            $table->unique('slug', 'training_categories_slug_unique');
            $table->index('title');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');

            // Fulltext axtarış üçün
            $table->fullText([
                'seo_keywords',
                'seo_description'
            ], 'training_categories_text_search_fulltext');
        });
    }

    public function down()
    {
        Schema::table('training_categories', function (Blueprint $table) {
            $table->dropUnique('training_categories_slug_unique');
            $table->dropIndex(['title']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);

            $table->dropFullText('training_categories_text_search_fulltext');
        });
    }
}
