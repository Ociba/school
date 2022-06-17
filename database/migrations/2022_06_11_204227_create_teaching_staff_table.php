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
        Schema::create('teaching_staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dob');
            $table->string('sex');
            $table->foreignId('class_one');
            $table->foreignId('class_two')->nullable();
            $table->foreignId('subjects');
            $table->foreignId('teachers_district_id');
            $table->string('teachers_county');
            $table->string('teachers_village');
            $table->string('teachers_registration_number');
            $table->string('teachers_nin');
            $table->string('institution');
            $table->string('year_of_qualification');
            $table->string('award');
            $table->string('award_grading');
            $table->string('other_qualifications')->nullable();
            $table->froeignId('user_category');
            $table->string('contact');
            $table->string('teachers_marital_status');
            $table->string('teachers_religion');
            $table->string('current_photo');
            $table->string('salary');
            $table->string('employment_status');
            $table->enum('status',['active','left','terminated'])->default('active');
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
        Schema::dropIfExists('teaching_staff');
    }
};
