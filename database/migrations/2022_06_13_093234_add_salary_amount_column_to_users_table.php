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
        Schema::table('non_teaching_staff', function (Blueprint $table) {
            $table->string('salary_amount')->nullable()->after('committee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('non_teaching_staff', function (Blueprint $table) {
            $table->dropColumn('salary_amount');
        });
    }
};
