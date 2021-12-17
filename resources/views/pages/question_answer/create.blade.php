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

                {{-- <form id="demo-form" data-parsley-validate="" enctype="multipart/form-data" action="{{route('ques-ans.store')}}" method="post"> --}}
                    <form action="{{route('ques-ans.store')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Course</label>
                        <select class="form-control" name="course_id" id="">
                            <option value="">Select Course</option>
                            @foreach (App\Models\Course::all() as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fullname" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Type</label>

                        <div class="form-check mb-1">
                            <input type="radio" name="type" id="genderM" value="1" required="" class="form-check-input">
                            <label for="genderM">MCQ</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" id="genderF" value="0" class="form-check-input">
                            <label for="genderF">Other</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fullname" class="form-label">File Upload</label>
                        <input type="file" class="form-control" name="file" id="file" required="">
                    </div>

                    <div class="mb-3">
                        <label for="fullname" class="form-label">File Ans</label>
                        <input type="file" class="form-control" name="is_ans" id="" >
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" class="form-control" name="description"
                            data-parsley-trigger="keyup" data-parsley-minlength="20"
                            data-parsley-maxlength="100"
                            {{-- data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.." --}}
                            data-parsley-validation-threshold="10">
                        </textarea>
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
