@extends('master')
@section('title','Question Answer')
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

                {{-- <form id="demo-form" data-parsley-validate="" enctype="multipart/form-data" action="{{route('course.store')}}" method="post"> --}}
                    <form action="{{route('course.assign.update',$course_teacher->id)}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Name</label>
                        <select name="teacher_id" class="form-control" id="">
                            <option value="">Select Teacher</option>
                            @foreach (App\Models\User::where('user_type', 'teacher')->get() as $teacher)
                                <option value="{{$teacher->id}}" {{(@$course_teacher->id == $teacher->id) ? "selected" : ""}}>{{$teacher->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Course</label>
                        <select name="course_id[]" id="" multiple class="form-control">
                            <option value="">Select Course</option>
                            @foreach (App\Models\Course::all() as $course)
                            <option value="{{$course->id}}" {{(@(in_array($course->id, $course_teacher->courses->pluck('id')->toArray()))) ? "selected" : ""}}>{{$course->name}}({{$course->code}})</option>
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
