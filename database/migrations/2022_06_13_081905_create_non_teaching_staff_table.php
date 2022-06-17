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
        Schema::create('non_teaching_staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->foreignId('user_category');
            $table->string('contact');
            $table->foreignId('district_id');
            $table->string('county');
            $table->string('village');
            $table->string('qualification')->nullable();
            $table->string('committee')->nullable();
            $table->string('current_photo');
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
        Schema::dropIfExists('non_teaching_staff');
    }
};
