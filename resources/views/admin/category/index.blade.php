@extends('admin.index')
@section('title')
Category
@endsection
@section('content')
<div class="row pb-2">
    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
        <a href="/admin/category/create">
            <button class="btn btn-block btn-primary glow">Create</button>
        </a>
    </div>
</div>
<div class="users-list-table">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="users-list-datatable" class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>parent</th>
                                <th>status</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td> {{App\Http\Controllers\CategoryController::getCategoryName($category->parents_id)}}
                                </td>
                                @if ($category->status === 1)
                                <td><span class="badge badge-success">Active</span></td>
                                @else
                                <td><span class="badge badge-danger">Inactive</span></td>
                                @endif
                                <td>
                                    <a href="/admin/category/update/{{$category->id}}">
                                        <i class="feather icon-edit-1"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="/admin/category/delete/{{$category->id}}">
                                        <i class="feather icon-trash-2 danger"></i>
                                    </a>
                                </td>
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
@section('js')
@endsection