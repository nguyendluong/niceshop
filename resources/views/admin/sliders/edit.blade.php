@extends('admin.index')
@section('title')
Create sliders
@endsection
@section('content')
<div class="form-sliders">
    <form action="/admin/slider/update/{{ $slider->id }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <div class="controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" required
                            value="{{ $slider->name }}" data-validation-required-message="This name field is required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label>Description</label>
                        <textarea rows="3" class="form-control" placeholder="Description"
                            name="description">{{ $slider->description }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="controls">
                        <label>Link to banner</label>
                        <input type="text" class="form-control" placeholder="Link to banner" name="link" required
                            value="{{ $slider->link }}" data-validation-required-message="This link field is required">
                    </div>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1" @if ($slider->status =="1" ) {{ 'selected' }} @endif>Active</option>
                        <option value="0" @if ($slider->status =="0" ) {{ 'selected' }} @endif>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="file" name="image" placeholder="Choose image" id="image">
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <img id="preview-image-before-upload" src="{{ asset('storage/'.$slider->path) }}" alt="preview image"
                    style="max-height: 250px;">
            </div>
            <div class="col-12 d-flex flex-sm-row flex-column mt-1 group-btn">
                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                    Save</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
    $('#image').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#preview-image-before-upload').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);

    });

});
</script>
@endsection