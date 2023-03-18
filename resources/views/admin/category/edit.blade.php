@extends('admin.layouts.master')
@section('customstyle')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Category Form</h3>
                    </div>
                    <form id="quickForm" action="{{route('categoryUpdate',$category->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"> Name </label>
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}"id="category_name" require placeholder="Enter  Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="page_name">Slug</label>
                                        <input type="text" name="slug" class="form-control" value="{{$category->slug}}"id="category_slug" require placeholder="slug">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="summernote" name="description">{{$category->description}} </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner_image">Banner Image</label>
                                        <input type="file" name="banner_image" class="form-control" id="banner_image"require placeholder="Banner Image">
                                        <img src="/uploads/categories/{{$category->banner_image}}"alt="{{$category->banner_image}}" width="20%" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" name="status" type="checkbox" value="1" {{($category->status==1 ? 'checked': '')}} >
                                            <label class="form-check-label">Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('customscript')

<script>
    var slug = function (str) {
        var $slug = '';
        var trimmed = $.trim(str);
        $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
        replace(/-+/g, '-').
        replace(/^-|-$/g, '');
        return $slug.toLowerCase();
    }

    $('#category_name').keyup(function () {
        var takedata = $(this).val()
        $('#category_slug').val(slug(takedata));
    });

</script>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })

</script>
@endsection
