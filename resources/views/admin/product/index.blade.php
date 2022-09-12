@extends('admin.index')
@section('title')
Product
@endsection
@section('content')
<div class="row pb-2">
    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
        <a href="/admin/product/create">
            <button class="btn btn-block btn-primary glow">Create Product</button>
        </a>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="table-responsive">
                <table id="js-list-product-datatable" class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Supplier</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->supplier_name }}</td>
                            @if ($product->status === 1)
                            <td><span class="badge badge-success">Active</span></td>
                            @else
                            <td><span class="badge badge-danger">Inactive</span></td>
                            @endif
                            <td>
                                <a href="/admin/product/update/{{$product->id}}">
                                    <i class="feather icon-edit-1"></i>
                                </a>
                            </td>
                            <td>
                                <a href="/admin/product/delete/{{$product->id}}">
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
@endsection
@section('js')
@endsection