<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToTrainingSubjectsTable extends Migration
{
    public function up()
    {
        Schema::table('training_subjects', function (Blueprint $table) {
            $table->index('name');
            $table->index('training_id');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');

            // Fulltext index for description
            $table->fullText(['description'], 'training_subjects_description_fulltext');
        });
    }

    public function down()
    {
        Schema::table('training_subjects', function (Blueprint $table) {
            $table->dropIndex(['name']);
            $table->dropIndex(['training_id']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);

            $table->dropFullText('training_subjects_description_fulltext');
        });
    }
}
