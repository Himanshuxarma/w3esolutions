@extends('admin.layouts.master')
@section('customstyle')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Domain </h3>
                    </div>
                    <form action="{{route('domainsSave')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"> Name </label>
                                        <input type="text" name="name" class="form-control" require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="project_done">Project Done</label>
                                        <select class="form-control"name="project_done" id="project_done">
                                            <option value="">--Project Done--</option>
                                            @foreach($projects as $project)
                                            <option value="{{$project->id}}">{{$project->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="technology"> Technology </label>
                                        <select class="form-control select2" multiple="multiple" name="technology[]" id="technology[]">
                                            <option value="">--Select Technology--</option>
                                            @foreach($technology as $data){
                                            <option value="{{$data->id}}">{{ $data->technology }}</option>
                                            }
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="summernote" name="description"> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" value="1" type="checkbox">
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
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });

</script>
@endsection
