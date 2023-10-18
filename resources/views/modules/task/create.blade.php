@extends('layout.master')
@section('title')
    Create page
@endsection
@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create Us</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Create Us </li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Us</h2>
                    </div>
                    <div class="card-body">
{{--                                                @if($errors)--}}
{{--                                                    <ul  class="alert alert-danger" >--}}

{{--                                                    @foreach($errors->all() as $error)--}}

{{--                                                           <li> {{$error}}</li>--}}
{{--                                                            <li> {{$error}}</li>--}}

{{--                                                    @endforeach--}}
{{--                                                    </ul>--}}
{{--                                                @endif--}}
                        <form method="post" action="{{route('task.store')}}" >
                            @csrf
                            <label for="" class="w-100">
                                title
                                <input type="text" name="title" class="form-control" placeholder="enter title">
                            </label>

                            <label for="" class="w-100 mt-3">
                                Description
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="enter description"></textarea>
                            </label>

                            <label for="" class="w-100 mt-3">
                                Select  status
                                <select name="status" id="" class="form-select">
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </label>
                            <label for="" class="w-100 mt-3">
                                Select Deadline
                                <input type="date" name="deadline" class="form-control" placeholder="sect deadline">
                            </label>
                            <label for="" class="w-100 mt-3">
                                Select User
                                <select name="user-id" id="" class="form-select">
                                    @foreach($users as $id=>$user)
                                        <option value="{{$id}}">{{$user}}</option>
                                    @endforeach

                                </select>
                            </label>
                            <button type="submit"  class="btn btn-success">Create new task</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection



