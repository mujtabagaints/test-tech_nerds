<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_course')) {
            Schema::create('tbl_course', function (Blueprint $table) {
                $table->increments('course_id');
                $table->string('course_name', 35);
                $table->dateTime('created_at');
                $table->integer('created_by')->nullable()->unsigned();
                $table->dateTime('updated_at');
                $table->integer('updated_by')->nullable()->unsigned();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_course');
    }
}
