<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblStudentCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_student_course')) {
            Schema::create('tbl_student_course', function (Blueprint $table) {
                $table->increments('id');
                
                $table->integer('student_id')->unsigned()->index();
                $table->foreign('student_id')->references('student_id')->on('tbl_student')->onDelete('cascade');

                $table->integer('course_id')->unsigned()->index();
                $table->foreign('course_id')->references('course_id')->on('tbl_course')->onDelete('cascade');
                
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
        Schema::dropIfExists('tbl_student_course');
    }
}
