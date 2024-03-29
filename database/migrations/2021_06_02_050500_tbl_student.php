<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tbl_student')) {
            Schema::create('tbl_student', function (Blueprint $table) {
                $table->increments('student_id');
                $table->string('first_name', 35);
                $table->string('last_name', 35);
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
        Schema::dropIfExists('tbl_student');
    }
}
