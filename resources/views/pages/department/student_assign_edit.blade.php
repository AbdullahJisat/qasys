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

                {{-- <form id="demo-form" data-parsley-validate="" enctype="multipart/form-data" action="{{route('department.store')}}" method="post"> --}}
                    <form action="{{route('department.assign-student.update',$department_student->id)}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Name</label>
                        <strong style="font-weight: 800;font-size: larger;margin: 30px;">{{ Auth::user()->name }}</strong>
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">department</label>
                        <select name="department_id[]" id="" multiple class="form-control">
                            <option value="">Select department</option>
                            @foreach (App\Models\Department::all() as $department)
                            {{-- <option value="{{$department->id}}" {{(@(in_array($department->id, $department_student->departments->pluck('id')->toArray()))) ? "selected" : ""}}>{{$department->name}}({{$department->code}})</option> --}}
                            <option value="{{$department->id}}" {{(@$department->id == $department_student->departmentsStudent[0]->id) ? "selected" : ""}}>{{$department->name}}({{$department->code}})</option>
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
