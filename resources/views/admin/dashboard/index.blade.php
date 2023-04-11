@extends('admin.layouts.master')
@section('customstyle')
@section('dashboard_select','active')
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info success">
                    <div class="inner">
                        <h3 style="padding:3px;"> <?php
                             $today_enquiry=0;
                             $created_at=date("Y-m-d");
                            foreach($enquiry as $data){
                                $newdate = new DateTime($data->created_at);
                                $db_date= $newdate->format('Y-m-d'); 
                            if($db_date==$created_at){
                                 $today_enquiry++;
                    }
                }
                
                echo $today_enquiry;
                       ?>
                        </h3>
                        <h4>Today Enquiry</h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{count($enquiry)}}<sup style="font-size: 20px"></sup></h3>
                        <p> Total Contact Enquiry</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-address-book"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h5 style="padding:3px;"> <?php
                             $today_rating=0;
                             $created_at=date("Y-m-d");
                            foreach($rating as $data){
                                $newdate = new DateTime($data->created_at);
                                $db_date= $newdate->format('Y-m-d'); 
                            if($db_date==$created_at){
                                $today_rating++;
                    }
                }
                
                echo $today_rating;
                       ?>
                        </h5>
                        <h5>Today Rating</h5>
                    </div>
                    <div class="">
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h5>{{count($rating)}}<sup style="font-size: 20px"></sup></h5>
                        <p> Total Review & Rating</p>
                    </div>
                    <div class="">
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                        <i style="color:#f2ad2f;font-size:20px;" class="fa fa-star"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 style="padding:3px;"> <?php
                             $today_careers=0;
                             $created_at=date("Y-m-d");
                            foreach($careers as $data){
                                $newdate = new DateTime($data->created_at);
                                $db_date= $newdate->format('Y-m-d'); 
                            if($db_date==$created_at){
                                $today_careers++;
                    }
                }
                
                echo $today_careers;
                       ?>
                        </h3>
                        <h4>Today Careers</h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{count($careers)}}<sup style="font-size: 20px"></sup></h3>
                        <p> Total Careers</p>
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
