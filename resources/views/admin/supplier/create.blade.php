@extends('admin.index')
@section('title')
Create supplier
@endsection
@section('content')
<form action="/admin/supplier/create" method="POST">
    @csrf
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <div class="controls">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required
                        data-validation-required-message="This name field is required">
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="Phone" name="phone" required
                        data-validation-required-message="This phone field is required">
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="address" required
                        data-validation-required-message="This address field is required">
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label>Director</label>
                    <input type="text" class="form-control" placeholder="Director" name="director" required
                        data-validation-required-message="This director field is required">
                </div>
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