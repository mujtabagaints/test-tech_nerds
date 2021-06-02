@extends('master.master')
@section('content')

<div class="container">
    <div class="row col-sm-12 main">
        <h1 class="page-header">All Course(s) List</h1>

        <div class="table-responsive">
            <table class="table table-striped" id="data-table-basic">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($courses as $course)
                    <tr>
                        <td><?= $count++ ?></td>
                        <td>{{ $course->course_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
