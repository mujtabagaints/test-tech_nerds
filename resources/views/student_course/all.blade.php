@extends('master.master')
@section('content')

<div class="container">
    <div class="row col-sm-12 main">
        <h1 class="page-header">All Student Course List</h1>

        <div class="table-responsive">
            <table class="table table-striped" id="data-table-basic">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Full Name</th>
                        <th>Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($student_courses as $student_course)
                    <tr>
                        <td><?= $count++ ?></td>
                        <td>{{ $student_course->student->first_name.' '.$student_course->student->last_name }}</td>
                        <td>{{ $student_course->course->course_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
