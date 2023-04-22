@extends('admin.layouts.master')
@section('customstyle')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">User Profile</h3>
                    </div>
                    <form action="{{route('user.profile.Update',$userprofile->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name"> First Name </label>
                                        <input type="text" name="first_name" class="form-control"value="{{$userprofile->first_name}}" require placeholder="Enter first_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="last_name" name="last_name" class="form-control"value="{{$userprofile->last_name}}" require placeholder="Enter last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob"> Date Of Birth </label>
                                        <input type="text" name="dob" class="form-control"value="{{$userprofile->dob}}" require placeholder="Enter Date Of Birth">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control"value="{{$userprofile->phone}}" require placeholder="Enter  phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_image"> User Image</label>
                                        <input type="file" name="user_image" class="form-control"value="{{$userprofile->user_image}}" require placeholder="Enter Date Of Birth">
                                        <img src="/assets/admin/img/users/{{$userprofile->user_image}}" alt="{{$userprofile->user_image}}" width="15%" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control"value="{{$userprofile->email}}" require placeholder="Enter  email">
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
@endsection
