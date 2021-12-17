@extends('master')
@section('title','department')
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
            <a type="button" href="{{route('department.assign-teacher')}}" class="btn btn-success">Add department</a>
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
                        <th data-field="date" data-sortable="true" data-formatter="dateFormatter">department</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($assign_teacher as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name ?? ''}}</td>
                            <td>
                            @foreach ($teacher->departments as $department)
                                {{$department->name ?? ''}}
                                @if(!$loop->last) , @endif
                            @endforeach
                            </td>
                            <td>
                                <a href="{{route('department.assign.edit',$teacher->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{route('department.assign.delete',$teacher->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No department Found</td>
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
