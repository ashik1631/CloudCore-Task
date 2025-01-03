@extends('layouts.backend')

@section('content')
<div class="container-fluname">
    <!-- breadcame start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.task.index') }}" class="breadcrumb-link"><span class="p-1 text-sm text-light bg-success rounded-circle"><i class="fas fa-home"></i></span> Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create task</li>
                            <a href="{{ route('user.task.index') }}" class="btn btn-primary ml-auto">Back</a>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="basic_form my-4">
                <div class="content_section">
                    <h5>Create Task Form</h5>
                    <hr>

                    @include('layouts.message')

                    <form action="{{ route('user.task.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Task-title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter your Task-title">
                        </div>
                        <div class="form-group">
                            <label for="link">Task-link</label>
                            <input type="text" name="link" value="{{ old('link') }}" class="form-control" placeholder="Enter your Task-link">
                            <div class="form-group">
                                <label for="status">Task-status</label>
                               <select name="status" class="form-control">
                                <option {{ old('Task-status')==1 ? 'selected': ''}} value="1">Completed</option>
                                <option {{ old('Task-status')==0 ? 'selected': ''}} value="0">Pending</option>
                                <option {{ old('Task-status')==2 ? 'selected': ''}} value="2">In-Progress</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Task-image</label>
                                <input type="file" name="image" class="form-control" placeholder="select your Task-image">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
