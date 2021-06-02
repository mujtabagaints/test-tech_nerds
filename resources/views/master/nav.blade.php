<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">test@techNerds</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="@if(\Request :: is('/')) active @endif"><a href="{{ URL :: to('/') }}">Student</a></li>
                <li class="@if(\Request :: is('courses/all')) active @endif"><a href="{{ URL :: to('/courses/all') }}">Course</a></li>
                <li class="@if(\Request :: is('student/courses/all')) active @endif"><a href="{{ URL :: to('/student/courses/all') }}">Students Courses</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
