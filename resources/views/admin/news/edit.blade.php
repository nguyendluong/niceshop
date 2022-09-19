@extends('admin.index')
@section('title')
Edit News
@endsection
@section('content')
<form action="/admin/news/update/{{ $news->id }}" method="POST">
    @csrf
    <div class="form-group">
        <fieldset class="form-group">
            <label for="basicInput">Title news</label>
            <input type="text" name="title" class="form-control" id="basicInput" value="{{ $news->title }}" required
                data-validation-required-message="This title field is required">
        </fieldset>
        <fieldset class="form-group">
            <label for="descTextarea">Content news</label>
            <textarea class="form-control" id="js-content-news" name="content" rows="15"
                placeholder="content news........" required
                data-validation-required-message="This content field is required">{{ $news->content }}</textarea>
        </fieldset>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column mt-1">
            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">update</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </div>
    </div>
</form>
@endsection
@section('js')
<script>
CKEDITOR.replace('js-content-news', {
    filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
@endsection