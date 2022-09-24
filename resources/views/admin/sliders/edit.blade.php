@extends('admin.index')
@section('title')
Create sliders
@endsection
@section('content')
<div class="form-sliders">
    <form action="/admin/sliders/update/{{ $sliders->id }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <div class="controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" required
                            value="{{ $sliders->name }}" data-validation-required-message="This name field is required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label>Description</label>
                        <textarea rows="3" class="form-control" placeholder="Description"
                            name="description">{{ $sliders->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            <div class="col-12 d-flex flex-sm-row flex-column mt-1 group-btn">
                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                    Save</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </div>
        </div>
    </form>
    <div class="image-preview">
        @foreach ($images as $image)
        <div class="preview-item" id="js-remove-file_{{$image->id}}">
            <img src="{{ asset('storage/sliders/'.$image->path) }}" alt="" />
            <a onClick="removeFile({{ $image->id }})">Remove file</a>
        </div>
        @endforeach
    </div>
    <div class="upload-files">
        <div class="form-group">
            <div class="controls">
                <label>Sliders</label>
                <form method="POST" action="/admin/sliders/fileUpdate/{{ $sliders->id }}" class="dropzone"
                    id="upload-form">@csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    Dropzone.options.uploadForm = {
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time + file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{ url("admin/sliders/deletePreview") }}',
                data: {
                    filename: name
                },
                success: function(data) {
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }
            });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file
                .previewElement) : void 0;
        }
    };
});
</script>
<script>
function removeFile(id) {
    const idFile = 'js-remove-file_' + id;
    var token = $("meta[name='csrf-token']").attr("content");

    $.ajax({
        url: "/admin/sliders/delete/" + id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function(data, textStatus, xhr) {
            $(`#${idFile}`).hide();
        },
    });
}
</script>
@endsection
@section('css')
<style>
.form-sliders {
    position: relative;
}

.upload-files {
    position: absolute;
    bottom: -225px;
    width: 100%;
}

.dropzone {
    width: 100%;
    height: 185px;
    overflow: auto;
    width: 100%;
    border: 1px dashed #ccd6e6;
    padding: 10px;
    min-height: 185px;
}

.group-btn {
    position: absolute;
    bottom: -275px;
}

.image-preview {
    display: flex;
    gap: 15px;
    overflow: auto;
}

.preview-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.preview-item>img {
    width: 120px;
    height: 120px;
    border-radius: 20px;
}

.dropzone .dz-message {
    margin: 141px 0 0;
}
</style>
@endsection