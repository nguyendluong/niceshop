@extends('admin.index')
@section('title')
Users 
@endsection
@section('content')

<div class="users-list-table">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="js-list-news-datatable" class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>role</th>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>status</th>
                                <!-- <th>edit</th> -->
                                <!-- <th>delete</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                @if ($user->status === 1)
                                <td><span class="badge badge-success">Active</span></td>
                                @else
                                <td><span class="badge badge-danger">Inactive</span></td>
                                @endif
                                <!-- <td>
                                    <a href="/admin/users/update/{{$user->id}}">
                                        <i class="feather icon-edit-1"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="/admin/users/delete/{{$user->id}}">
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