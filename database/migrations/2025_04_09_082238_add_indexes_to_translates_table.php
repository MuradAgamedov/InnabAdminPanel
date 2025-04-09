<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToTranslatesTable extends Migration
{
    public function up()
    {
        Schema::table('translates', function (Blueprint $table) {
            $table->index('group');
            $table->index('keyword');
            $table->index('order');
            $table->index('created_at');

            // Fulltext index for searching in value
            $table->fullText(['value'], 'translates_value_fulltext');
        });
    }

    public function down()
    {
        Schema::table('translates', function (Blueprint $table) {
            $table->dropIndex(['group']);
            $table->dropIndex(['keyword']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);

            $table->dropFullText('translates_value_fulltext');
        });
    }
}
