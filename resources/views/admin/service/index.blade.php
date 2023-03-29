@extends('admin.layouts.master')
@section('customstyle')
@section('service_select','active')
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
                <a class="btn btn-sm btn-success" href="{{route('servicesCreate')}}"> Create Services</a>
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
                            <th scope="col" width="10%">Title</th>
                            <th scope="col" width="10%">Description</th>
                            <th scope="col" width="10%">Image</th>
                            <th scope="col" width="10%">Status</th>
                            <th scope="col" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ strlen(strip_tags($service->description) < 100 ) ? substr(strip_tags($service->description), 0, 100).' ...' : strip_tags($service->description)}}</td>
                            <td><img src="/uploads/services/{{$service->image}}" alt="{{$service->image}}" width="100%" /></td>

                            @if($service->status == "1")
                            <td>
                                <a href="{{ route('servicesStatus',$service->id) }}" class="btn btn-success">Active</a>
                            </td>
                            @else
                            <td>
                                <a href="{{ route('servicesStatus',$service->id) }}" class="btn btn-primary">Inactive</a>
                            </td>
                            @endif
                            <td>

                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('servicesEdit',$service->id) }}">Edit</a>
                                        <a class="dropdown-item" href="{{ route('servicesDelete',$service->id) }}">Delete</a>
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
