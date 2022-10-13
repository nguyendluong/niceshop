@extends('admin.index')
@section('title')
News
@endsection
@section('content')
<form action="/admin/news/create" method="POST">
    @csrf
    <div class="form-group">
        <fieldset class="form-group">
            <label for="basicInput">Title news</label>
            <input type="text" name="title" class="form-control" id="basicInput">
        </fieldset>
        <div class="form-group">
            <div class="controls">
                <label>Description</label>
                <textarea rows="3" class="form-control" placeholder="Description" name="description"></textarea>
            </div>
        </div>
        <fieldset class="form-group">
            <label for="descTextarea">Content news</label>
            <textarea class="form-control" id="js-content-news" name="content" rows="15"
                placeholder="content news........"></textarea>
        </fieldset>
        <div class="col-md-12">
            <div class="form-group">
                <input type="file" name="image" placeholder="Choose image" id="image">
                @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-12 mb-2">
            <img id="preview-image-before-upload"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                alt="preview image" style="max-height: 250px;">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column mt-1">
            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </div>
    </div>
</form>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
CKEDITOR.replace('js-content-news', {
    filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
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
@section('css')
<style>
</style>
@endsection