@extends('master')
@section('title','Questiion Answer')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Custom Toolbar</h4>
            <p class="sub-header">
                Example of custom toolbar.
            </p>

            <a type="button" href="{{route('ques-ans.create')}}" class="btn btn-success">Add Ques Ans</a>
            {{-- <button id="demo-delete-row" class="btn btn-danger btn-sm" disabled><i class="mdi mdi-close me-1"></i>Delete</button> --}}
            <table id="demo-custom-toolbar" data-toggle="table" data-toolbar="#demo-delete-row" data-search="true"
                data-show-columns="true" data-sort-name="id" data-page-list="[5, 10, 20]"
                data-page-size="5" data-pagination="true" class="table-borderless">
                <thead class="table-light">
                    <tr>
                        {{-- <th data-field="state" data-checkbox="true"></th> --}}
                        {{-- <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th> --}}
                        <th>#</th>
                        <th data-field="name" data-sortable="true">Name</th>
                        <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Description</th>
                        <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Type</th>
                        <th>Teacher</th>
                        <th>Course</th>
                        <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Action
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($questionAnswers as $questionAnswer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$questionAnswer->name}}</td>
                            <td>{{$questionAnswer->description}}</td>
                            <td>{{$questionAnswer->type}}</td>
                            <td>{{$questionAnswer->teacher->name}}</td>
                            <td>{{$questionAnswer->course->name}}</td>
                            <td>
                                <a href="{{route('ques-ans.edit',$questionAnswer->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{route('ques-ans.delete',$questionAnswer->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Questions Found</td>
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
