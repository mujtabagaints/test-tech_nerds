<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Course;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $students = Student::all();
        foreach ($students as $student) {
            DB::table('tbl_student_course')->insert([
                'student_id' => $student->student_id,
                'course_id'  => rand(1, 10),
                'created_at' => Carbon::now(),
                'created_by' => 1,
                'updated_at' => Carbon::now(),
                'updated_by' => 1,
            ]);
        }
    }
}
