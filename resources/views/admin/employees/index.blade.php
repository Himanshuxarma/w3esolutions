@extends('admin.layouts.master')
@section('customstyle')
@section('employess_select','active')
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
                <a class="btn btn-sm btn-success  " href="{{route('employeesCreate')}}"> Create Employee</a>

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
                            <th scope="col" width="5%">#</th>
                            <th width="10%">Employee Id</th>
                            <th width="10%">Name</th>
                            <th width="10%">Job Profile</th>
                            <th width="10%">Total Experience</th>
                            <th width="10%">Photo</th>
                            <th width="10%">Joining Date</th>
                            <th width="10%">Salary</th>
                            <th width="10%">Date Of Birth</th>
                            <!-- <th width="10%">Description</th> -->
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->employee_id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->job_profile}}</td>
                            <td>{{$data->total_exp}}</td>
                            <td>
                                <img src="/uploads/employees/{{$data->photo}}" alt="{{$data->photo}}"width="50%" />
                            </td>
                            <td>{{$data->joining_date}}</td>
                            <td>{{$data->salary}}</td>
                            <td>{{$data->dob}}</td>
                            <!-- <td>{{$data->description}}</td> -->
                            
                           
                            @if($data->status == "1")
                            <td>
                                <a href="{{ route('employeesStatus',$data->id) }}" class="text-success">Active</a>
                            </td>
                            @else
                            <td>
                                <a href="{{ route('employeesStatus',$data->id) }}" class="text-danger">Inactive</a>
                            </td>
                            @endif
                            <td>
                                 <div class="input-group-prepend">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('employeesEdit',$data->id) }}">Edit</a>
                                        <a class="dropdown-item"  href="{{ route('employeesDelete',$data->id) }}">Delete</a>
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
