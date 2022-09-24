@extends('admin.index')
@section('title')
Sliders
@endsection
@section('content')
<div class="row pb-2">
    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
        <a href="/admin/sliders/create">
            <button class="btn btn-block btn-primary glow">Create Sliders</button>
        </a>
    </div>
</div>
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="table-responsive">
                <table id="js-list-sliders-datatable" class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>description</th>
                            <th>link</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $sliders)
                        <tr>
                            <td>{{ $sliders->id }}</td>
                            <td>{{ $sliders->name }}</td>
                            <td>{{ $sliders->sliders_name }}</td>
                            <td>{{ $sliders->sliders_name }}</td>
                            @if ($sliders->status === 1)
                            <td><span class="badge badge-success">Active</span></td>
                            @else
                            <td><span class="badge badge-danger">Inactive</span></td>
                            @endif
                            <td>
                                <a href="/admin/sliders/update/{{$sliders->id}}">
                                    <i class="feather icon-edit-1"></i>
                                </a>
                            </td>
                            <td>
                                <a href="/admin/sliders/delete/{{$sliders->id}}">
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