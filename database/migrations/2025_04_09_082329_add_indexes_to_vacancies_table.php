<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToVacanciesTable extends Migration
{
    public function up()
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->unique('slug', 'vacancies_slug_unique');
            $table->index('title');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');

            // Fulltext index for text-based search
            $table->fullText([
                'vacancy_header_text',
                'vacancy_footer_text',
                'obligations',
                'skills',
                'seo_keywords',
                'seo_description'
            ], 'vacancies_text_search_fulltext');
        });
    }

    public function down()
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropUnique('vacancies_slug_unique');
            $table->dropIndex(['title']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);

            $table->dropFullText('vacancies_text_search_fulltext');
        });
    }
}
