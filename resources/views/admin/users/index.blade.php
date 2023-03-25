@extends('admin.layouts.master')
@section('customstyle')
@section('users_select','active')
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>Email Verified At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->email_verified_at}}</td>
                                    <td>
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Action</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:voild(0);">Edit</a>
                                                <a class="dropdown-item" href="{{ route('userDelete',$data->id) }}">Delete</a>
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
    </div>
</section>
@endsection
@section('customscript')
@endsection
