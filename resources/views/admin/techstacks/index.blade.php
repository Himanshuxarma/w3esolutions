@extends('admin.layouts.master')
@section('customstyle')
@section('techstacks_select','active')
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

                <a class="btn btn-sm btn-success  " href="{{route('techstacksCreate')}}"> Create Techstacks</a>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col" width="10%">Technology</th>
                            <th scope="col" width="10%">Tech Icon</th>
                            <!-- <th scope="col" width="10%">Description</th> -->
                            <th scope="col" width="10%">Status</th>
                            <th scope="col" width="10%">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($techstacks as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->technology }}</td>
                            <td> <img src="/uploads/techstacks/{{$data->tech_icon}}" alt="{{$data->tech_icon}}"width="50%" /></td>
                            <!-- <td>{{ strlen(strip_tags($data->description) < 100 ) ? substr(strip_tags($data->description), 0, 100).' ...' : strip_tags($data->description) }}
                            </td> -->
                            @if($data->status == "1")
                            <td class="project-state">
                                <a href="{{ route('techstacksStatus',$data->id) }}"><span class="badge badge-success">Active</span></a>
                            </td>
                            @else
                            <td class="project-state">
                                <a href="{{ route('techstacksStatus',$data->id) }}"><span class="badge badge-danger">Inactive</span></a>
                            </td>
                            @endif
                            <td>
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('techstacksEdit',$data->id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ route('techstacksDelete',$data->id) }}">Delete</a>
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
    setTimeout(function () {
        $('.hide1').fadeOut('slow');
    }, 5000);

</script>

@endsection
