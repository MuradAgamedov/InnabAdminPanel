<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToCourseFaqsTable extends Migration
{
    public function up()
    {
        Schema::table('course_faqs', function (Blueprint $table) {
            $table->index('course_id');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('course_faqs', function (Blueprint $table) {
            $table->dropIndex(['course_id']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
        });
    }
}
