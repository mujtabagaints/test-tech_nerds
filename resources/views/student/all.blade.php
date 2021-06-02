@extends('master.master')
@section('content')

<div class="container">
    <div class="row col-sm-12 main">
        <h1 class="page-header">All Student(s) List</h1>

        <div class="table-responsive">
            <table class="table table-striped" id="data-table-basic">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Fisrt Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($students as $student)
                    <tr>
                        <td><?= $count++ ?></td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
