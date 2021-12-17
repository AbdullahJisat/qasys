@extends('master')
@section('title','Department')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Custom Toolbar</h4>
            <p class="sub-header">
                Example of custom toolbar.
            </p>
            @if (Auth::user()->user_type == 'admin')
            <a type="button" href="{{route('department.create')}}" class="btn btn-success">Add Department</a>
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
                    @forelse ($departments as $department)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->code}}</td>
                            <td>
                                <a href="{{route('department.edit',$department->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{route('department.delete',$department->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Department Found</td>
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
