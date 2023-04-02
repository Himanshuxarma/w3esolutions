@extends('admin.layouts.master')
@section('customstyle')
@section('project_select','active')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            @if ($message = Session::get('success'))
             <p class="alert alert-success hide1 ">
            {{ $message }}
            </p>
            @endif
                <a class="btn btn-sm btn-success  " href="{{route('projectsCreate')}}"> Create project</a>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col" width="10%">Category </th>
                            <th scope="col" width="10%">Title</th>
                            <th scope="col" width="10%">Slug</th>
                            <th scope="col" width="10%">Description</th>
                            <th scope="col" width="10%">Image</th>
                            <th scope="col" width="10%">Featured</th>
                            <th scope="col" width="10%">Status</th>
                            <th scope="col" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <!-- <td>{{$project->cat_id}}</td> -->
                            <td>{{ (!empty($project->category) && $project->category->name != '') ? $project->category->name : 'N/A'}}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>{{ strlen(strip_tags($project->description) < 100 ) ? substr(strip_tags($project->description), 0, 50).' ...' : strip_tags($project->description)}}
                            </td>
                            <td>
                                <img src="/uploads/projects/{{$project->image}}" alt="{{$project->image}}"width="50%" />
                            </td>
                            @if($project->is_featured =="1")
                            <td> <a href="{{ route('featuredStatus',$project->id) }}" class="text-success">Featured</a>
                            </td>
                            @else
                            <td> <a href="{{ route('featuredStatus',$project->id) }}" class="text-danger">Unfeatured</a>
                            </td>
                            @endif
                            @if($project->status == "1")
                            <td>
                                <a href="{{ route('updateStatus',$project->id) }}" class="text-success">Active</a>
                            </td>
                            @else
                            <td>
                                <a href="{{ route('updateStatus',$project->id) }}" class="text-danger">Inactive</a>
                            </td>
                            @endif
                            <td>

                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-default dropdown-toggle"data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('projectsEdit',$project->id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ route('projectsDelete',$project->id) }}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>

    </div>
</div>
@endsection
@section('customscript')
<script>
    setTimeout(function() {
    $('.hide1').fadeOut('slow');
    }, 5000);
</script>
@endsection
