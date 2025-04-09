<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToScholarshipProgramsTable extends Migration
{
    public function up()
    {
        Schema::table('scholarship_programs', function (Blueprint $table) {
            $table->index('name');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('scholarship_programs', function (Blueprint $table) {
            $table->dropIndex(['name']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
        });
    }
}
