<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToVebinarsTable extends Migration
{
    public function up()
    {
        Schema::table('vebinars', function (Blueprint $table) {
            $table->index('event_datetime');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');

            // Fulltext index üçün title, slug, spikers, place sahələrində axtarış
            $table->fullText(
                ['title', 'slug', 'spikers', 'place'],
                'vebinars_text_search_fulltext'
            );
        });
    }

    public function down()
    {
        Schema::table('vebinars', function (Blueprint $table) {
            $table->dropIndex(['event_datetime']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);

            $table->dropFullText('vebinars_text_search_fulltext');
        });
    }
}
