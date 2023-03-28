@extends('admin.layouts.master')
@section('customstyle')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update Project</h3>
                    </div>

                    <form id="quickForm" action="{{route('projectsUpdate',$projects->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title"> Category Name </label>
                                        <select class="form-control" name="cat_id" id="cat_id">
                                            @foreach($category as $cat)
                                            <option value="{{$cat->id}}">@if($cat->id==$projects->cat_id)@endif{{$cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="title"> Title </label>
                                            <input type="text" name="title" class="form-control"value="{{$projects->title}}" id="product_title" require placeholder="Enter  Title">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="page_name">Slug</label>
                                            <input type="text" name="slug" class="form-control" value="{{$projects->slug}}" id="product_slug" require placeholder="slug">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="summernote" name="description">{{$projects->description}} </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="image"> Image</label>
                                            <input type="file" name="image" class="form-control" id="image" require placeholder=" Image">
                                            <img src="/uploads/projects/{{$projects->image}}" alt="{{$projects->image}}" width="30%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="is_featured" value="1" type="checkbox"{{($projects->is_featured==1 ? 'checked': '')}}>
                                    <label class="form-check-label">Is Featured ?</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" value="1" type="checkbox"{{($projects->status==1 ? 'checked': '')}}>
                                    <label class="form-check-label">Status</label>
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

<script>
    var slug = function (str) {
        var $slug = '';
        var trimmed = $.trim(str);
        $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
        replace(/-+/g, '-').
        replace(/^-|-$/g, '');
        return $slug.toLowerCase();
    }

    $('#product_title').keyup(function () {
        var takedata = $(this).val()
        $('#product_slug').val(slug(takedata));
    });

</script>
@endsection
