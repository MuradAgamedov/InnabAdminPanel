<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToSiteInfosTable extends Migration
{
    public function up()
    {
        Schema::table('site_infos', function (Blueprint $table) {
            $table->index('phone1');
            $table->index('phone2');
            $table->index('phone3');
            $table->index('email1');
            $table->index('email2');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('site_infos', function (Blueprint $table) {
            $table->dropIndex(['phone1']);
            $table->dropIndex(['phone2']);
            $table->dropIndex(['phone3']);
            $table->dropIndex(['email1']);
            $table->dropIndex(['email2']);
            $table->dropIndex(['created_at']);
        });
    }
}
