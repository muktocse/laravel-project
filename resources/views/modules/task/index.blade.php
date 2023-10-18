@extends('layout.master')
@section('title')
    task list
@endsection
@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create Us</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Create Us </li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Us</h2>
                    </div>
                    <div class="card-body">
                        <table class="table  table-sm table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Deadline</th>
                                <th>Asigned user</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $sl=1 @endphp
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$task->title}}</td>
                                <td>{{substr($task->description,0,20)}}</td>
                                <td>{{$task->status}}</td>
{{--                                <td>{{$task->deadline}}</td>--}}
{{--                                <td>{{$task->user_id}}</td>--}}
{{--                                <td>{{$task->created_at->toDayDateTimeString()}}</td>--}}
{{--                                <td>{{$task->updated_at->toDayDateTimeString()}}</td>--}}
{{--                                <td>Action</td>--}}
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection




