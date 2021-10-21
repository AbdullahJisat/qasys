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
                    <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Code</label>
                        <input type="text" class="form-control" name="code" id="code" required="">
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
