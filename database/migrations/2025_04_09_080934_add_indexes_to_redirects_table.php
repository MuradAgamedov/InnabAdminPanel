<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToRedirectsTable extends Migration
{
    public function up()
    {
        Schema::table('redirects', function (Blueprint $table) {
            $table->index('old_url');
            $table->index('new_url');
            $table->index('status_code');
            $table->index('order');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('redirects', function (Blueprint $table) {
            $table->dropIndex(['old_url']);
            $table->dropIndex(['new_url']);
            $table->dropIndex(['status_code']);
            $table->dropIndex(['order']);
            $table->dropIndex(['created_at']);
        });
    }
}
