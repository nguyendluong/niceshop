@extends('admin.index')
@section('title')
News
@endsection
@section('content')
<div class="row pb-2">
    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
        <a href="/admin/news/create">
            <button class="btn btn-block btn-primary glow">Create News</button>
        </a>
    </div>
</div>
<div class="users-list-table">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="js-list-news-datatable" class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>status</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $new)
                            <tr>
                                <td>{{ $new->id }}</td>
                                <td>{{ $new->title }}</td>
                                @if ($new->status === 1)
                                <td><span class="badge badge-success">Active</span></td>
                                @else
                                <td><span class="badge badge-danger">Inactive</span></td>
                                @endif
                                <td>
                                    <a href="/admin/news/update/{{$new->id}}">
                                        <i class="feather icon-edit-1"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="/admin/news/delete/{{$new->id}}">
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