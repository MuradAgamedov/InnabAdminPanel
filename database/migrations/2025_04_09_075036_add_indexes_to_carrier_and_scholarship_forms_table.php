<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToCarrierAndScholarshipFormsTable extends Migration
{
    public function up()
    {
        Schema::table('carrier_and_scholarship_forms', function (Blueprint $table) {
            $table->index('fin');
            $table->index('phone');
            $table->index('date');
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::table('carrier_and_scholarship_forms', function (Blueprint $table) {
            $table->dropIndex(['fin']);
            $table->dropIndex(['phone']);
            $table->dropIndex(['date']);
            $table->dropIndex(['created_at']);
        });
    }
}
