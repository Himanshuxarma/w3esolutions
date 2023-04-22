@extends('admin.layouts.master')
@section('customstyle')
@section('careers_select','active')
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
                            <th scope="col" width="10%">Name</th>
                            <th scope="col" width="10%">Email</th>
                            <th scope="col" width="10%">Phone</th>
                            <th scope="col" width="10%">Profile Image</th>
                            <th scope="col" width="10%">Experience</th>
                            <th scope="col" width="10%">Resume</th>
                            <th scope="col" width="10%">Contact Form</th>
                            <!-- <th scope="col" width="10%">Description</th> -->
                            <th scope="col" width="10%">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careers as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>
                                <img src="/uploads/front/careers/{{$data->profile_image}}" alt="{{$data->profile_image}}" width="50%" />
                            </td>
                            <td>{{$data->experience}} Years</td>
                            <td>
                                <img src="/uploads/front/careers/{{$data->resume}}" alt="{{$data->resume}}"width="50%" />
                            </td>
                            <td>{{$data->contact_form}}</td>
                            <!-- <td>{{ strlen(strip_tags($data->description) < 100 ) ? substr(strip_tags($data->description), 0, 50).' ...' : strip_tags($data->description)}}</td> -->
                            </td>
                            <td>
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('careersReply',$data->id) }}">Reply</a>
                                        <a class="dropdown-item" href="{{ route('careersDelete',$data->id) }}">Delete</a>
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
