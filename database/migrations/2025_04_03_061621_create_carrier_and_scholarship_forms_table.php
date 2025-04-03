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
            $table->string('fin');
            $table->date('date');
            $table->string('phone');
            $table->string('project')->nullable();
            $table->string('education')->nullable();
            $table->string('student_status')->nullable();
            $table->string('work_status')->nullable();
            $table->string('voen')->nullable();
            $table->string('address')->nullable();
            $table->string('work_status_other')->nullable();
            $table->string('student_status_other')->nullable();
            $table->string('education_other')->nullable();
            $table->string('project_other')->nullable();
            $table->string('cv_path'); // CV faylının yolu
        });
    }

    public function down()
    {
        Schema::dropIfExists('carrier_and_scholarship_forms');
    }
};
