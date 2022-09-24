@extends('admin.index')
@section('title')
Sliders
@endsection
@section('content')
<div class="row pb-2">
    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
        <a href="/admin/slider/create">
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
                            <th>preview</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->name }}</td>
                            <td>{{ $slider->description }}</td>
                            <td><img src="{{ asset('storage/'.$slider->path) }}" alt="" width="150px" /></td>
                            @if ($slider->status === 1)
                            <td><span class="badge badge-success">Active</span></td>
                            @else
                            <td><span class="badge badge-danger">Inactive</span></td>
                            @endif
                            <td>
                                <a href="/admin/slider/update/{{$slider->id}}">
                                    <i class="feather icon-edit-1"></i>
                                </a>
                            </td>
                            <td>
                                <a href="/admin/slider/delete/{{$slider->id}}">
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