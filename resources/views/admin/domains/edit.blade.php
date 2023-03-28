@extends('admin.layouts.master')
@section('customstyle')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update Domain </h3>
                    </div>
                    <form action="{{route('domainsUpdate',$domains->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"> Name </label>
                                        <input type="text" name="name" class="form-control" value="{{$domains->name}}" require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="project_done">Project Done</label>
                                        <select class="form-control" name="project_done" id="project_done">
                                            <option value="">--Project Done--</option>
                                                @foreach($projects as $project)
                                                    <option value="{{$project->id}}" {{$project->project_done == $project->id  ? 'selected' : ''}}>{{ $project->title}}</option>

                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="technology"> Technology </label>
                                        <select class="form-control" name="technology" id="technology">
                                            <option value="">--Select Technology--</option>
                                            @foreach($techstack as $data)
                                            <option value="{{$data->id}}"{{$data->technology == $data->id  ? 'selected' : ''}}>{{ $data->technology}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="summernote" name="description">{{$domains->description}} </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" type="checkbox" value="1"{{($domains->status==1 ? 'checked': '')}}>
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
@endsection
