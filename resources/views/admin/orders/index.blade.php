@extends('admin.index')
@section('title')
Orders
@endsection
@section('content')

<div class="orders-list-table">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="js-list-news-datatable" class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>productId</th>
                                <!-- <th>usersId</th> -->
                                <th>total</th>
                                <th>payment method</th>
                                <th>note</th>
                                <th>status</th>
                                <!-- <th>edit</th> -->
                                <!-- <th>delete</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->productId }}</td>
                                <!-- <td>{{ $order->orderId }}</td> -->
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->paymentMethod }}</td>
                                <td>{{ $order->note }}</td>
                                @if ($order->status === 1)
                                <td><span class="badge badge-success">Active</span></td>
                                @else
                                <td><span class="badge badge-danger">Inactive</span></td>
                                @endif
                                <!-- <td>
                                    <a href="/admin/orders/update/{{$order->id}}">
                                        <i class="feather icon-edit-1"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="/admin/orders/delete/{{$order->id}}">
                                        <i class="feather icon-trash-2 danger"></i>
                                    </a>
                                </td> -->
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