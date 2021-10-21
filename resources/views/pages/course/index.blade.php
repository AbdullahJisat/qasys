@extends('master')
@section('title','Course')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Custom Toolbar</h4>
            <p class="sub-header">
                Example of custom toolbar.
            </p>
            @if (Auth::user()->user_type == 'teacher')
            <a type="button" href="{{route('course.create')}}" class="btn btn-success">Add Course</a>
            @endif
            <table id="demo-custom-toolbar" data-toggle="table" data-toolbar="#demo-delete-row" data-search="true"
                data-show-columns="true" data-sort-name="id" data-page-list="[5, 10, 20]"
                data-page-size="5" data-pagination="true" class="table-borderless">
                <thead class="table-light">
                    <tr>
                        {{-- <th data-field="state" data-checkbox="true"></th> --}}
                        {{-- <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th> --}}
                        <th>#</th>
                        <th data-field="name" data-sortable="true">Name</th>
                        <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Code</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->code}}</td>
                            <td>
                                <a href="{{route('course.edit',$course->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{route('course.delete',$course->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Course Found</td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->


@endsection
