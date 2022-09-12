@extends('admin.index')
@section('title')
Create category
@endsection
@section('content')
<form action="/admin/category/update/{{ $category->id }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <div class="controls">
                    <label>Name</label>
                    <input type="text" class="form-control" placeh$categoryer="Name" name="name" required
                        value="{{ $category->name }}" data-validation-required-message="This name field is required">
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label>Category parent</label>
                    <select id="projectinput5" name="parents_id" class="form-control">
                        <option value="0">None</option>
                        @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" @if ($cat->id ==$category->parents_id ) {{ 'selected' }} @endif>
                            {{ $cat->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="1" @if ($category->status =="1" ) {{ 'selected' }} @endif>Active</option>
                    <option value="0" @if ($category->status =="0" ) {{ 'selected' }} @endif>Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column mt-1">
            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                Save</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </div>
    </div>
</form>
@endsection
@section('js')
@endsection