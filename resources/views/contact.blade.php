@extends('layout.master')
@section('title')
    Contact page
@endsection

@section('body')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Contact Us</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Contact Us </li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="enter  your name ">
                        </form>
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection


