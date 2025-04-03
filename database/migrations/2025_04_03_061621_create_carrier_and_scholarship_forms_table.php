<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('carrier_and_scholarship_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('phone');
            $table->string('fin');
            $table->string('project')->nullable();
            $table->string('education')->nullable();
            $table->string('student_status')->nullable();
            $table->string('work_status')->nullable();
            $table->string('voen')->nullable();
            $table->string('address')->nullable();
            $table->string('cv_path'); // CV fayl yolu
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carrier_and_scholarship_forms');
    }
};
