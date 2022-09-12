@extends('admin.index')
@section('title')
Suppliers
@endsection
@section('content')
<div class="row pb-2">
    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
        <a href="/admin/supplier/create">
            <button class="btn btn-block btn-primary glow">Create</button>
        </a>
    </div>
</div>
<div class="users-list-table">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="js-supplier-list-datatable" class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>phone</th>
                                <th>director</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->id }}</td>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->phone }}</td>
                                <td>{{ $supplier->director }}</td>
                                </td>
                                <td>
                                    <a href="/admin/supplier/update/{{$supplier->id}}">
                                        <i class="feather icon-edit-1"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="/admin/supplier/delete/{{$supplier->id}}">
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