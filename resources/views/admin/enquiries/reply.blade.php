@extends('admin.layouts.master')
@section('customstyle')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Reply</h3>
                    </div>
                    <form action="{{route('replyUpdate',$enquiryReply->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name"> Full Name </label>
                                        <input type="text" name="full_name" class="form-control" value="{{$enquiryReply->full_name}}" require  readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$enquiryReply->email}}" require readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone"> Phone </label>
                                        <input type="text" name="phone" class="form-control" value="{{$enquiryReply->phone}}" require readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subject" class="form-control" value="{{$enquiryReply->subject}}" require readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="message"> Message </label>
                                        <input type="text" name="message" class="form-control" value="{{$enquiryReply->message}}" require readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reply"> Reply </label>
                                        <input type="text" name="reply" class="form-control" value="{{$enquiryReply->reply}}" require >
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
