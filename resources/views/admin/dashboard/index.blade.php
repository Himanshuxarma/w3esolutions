@extends('admin.layouts.master')
@section('customstyle')
@section('dashboard_select','active')
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$users}}</h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$pages}}<sup style="font-size: 20px"></sup></h3>
                        <p>Pages</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>{{$enquiry}}<sup style="font-size: 20px"></sup></h3>
                        <p>Contact Enquiry</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-address-book"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$settings}}</h3>
                        <p>Settings </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
        </div>
</section>

@endsection
@section('customscript')
@endsection
