<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToLangsTable extends Migration
{
    public function up()
    {
        Schema::table('langs', function (Blueprint $table) {
            $table->unique('code', 'langs_code_unique');
            $table->index('site_code');
            $table->index('is_default');
            $table->index('status');
            $table->index('order');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('langs', function (Blueprint $table) {
            $table->dropUnique('langs_code_unique');
            $table->dropIndex(['site_code']);
            $table->dropIndex(['is_default']);
            $table->dropIndex(['status']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
        });
    }
}
