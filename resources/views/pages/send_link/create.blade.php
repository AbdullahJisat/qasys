@extends('master')
@section('title','Send Link')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                {{-- <div class="alert alert-warning d-none fade show">
                    <h4 class="mt-0 text-warning">Oh snap!</h4>
                    <p class="mb-0">This form seems to be invalid :(</p>
                </div>

                <div class="alert alert-info d-none fade show">
                    <h4 class="mt-0 text-info">Yay!</h4>
                    <p class="mb-0">Everything seems to be ok :)</p>
                </div> --}}

                {{-- <form id="demo-form" data-parsley-validate="" enctype="multipart/form-data" action="{{route('ques-ans.store')}}" method="post"> --}}
                    <form action="{{route('send-link.store')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" id="link" required="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teacher</label>

                        <select class="form-control" name="teacher_id" id="">
                            <option value="">Select Teacher</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Student</label>

                        <select class="form-control" multiple name="student_id[]" id="">
                            <option value="" disabled>Select Student</option>
                            @foreach ($students as $student)
                                <option value="{{$student->id}}">{{$student->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teacher</label>

                        <select class="form-control" name="course_id" id="">
                            <option value="">Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>

                </form>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->


@endsection
