@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <!-- breadcame start -->
    @include('layouts.message')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.task.index') }}"
                                    class="breadcrumb-link"><span
                                        class="p-1 text-sm text-light bg-success rounded-circle"><i
                                            class="fas fa-home"></i></span> Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Task</li>
                            <a href="{{ route('user.task.create') }}" class="btn btn-primary ml-auto">Create
                                task</a>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- data table start -->
<div class="data_table my-4">
    <div class="content_section">
        <table id="example" class="table table-striped table-bordered table-responsive-sm" style="width:100%">
            <thead>
                <tr>
                    <th>Sl.Num</th>
                    <th>Task-Image</th>
                    <th>Task-title</th>
                    <th>Task-link</th>
                    <th>Task-status</th>
                    <th>Task-action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($task as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset($item->image) }}" width="50" alt="photo">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->link }}</td>
                    <td>
                        @if ($item->status==1)
                        <span class="badge badge-success">Completed</span>
                        @elseif ($item->status==0)
                        <span class="badge badge-danger">Pending</span>
                        @else
                        <span class="badge badge-warning">In-Progress</span>
                        @endif
                    </td>

                    <td class="d-flex">
                        <a href="{{ route('user.task.edit', $item->id) }}" class=" btn btn-primary">Edit</a>
                        <form action="{{ route('user.task.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- end -->
@endsection
