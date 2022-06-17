<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->foreignId('student_level');
            $table->foreignId('district_id');
            $table->string('county');
            $table->string('village');
            $table->string('contact');
            $table->string('registration_number');
            $table->string('nin')->nullable();
            $table->string('disease');
            $table->string('cocurricular');
            $table->string('mothers_name')->nullable();
            $table->string('mothers_contact')->nullable();
            $table->string('mothers_nin')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('fathers_contact')->nullable();
            $table->string('fathers_nin')->nullable();
            $table->string('emergency_name');
            $table->string('emergency_contact');
            $table->string('emergency_nin')->nullable();
            $table->string('current_photo');
            $table->foreignId('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
