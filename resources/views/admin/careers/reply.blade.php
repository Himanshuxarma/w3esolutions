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
                    <form action="{{route('careers.reply.Update',$careersreply->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">  Name </label>
                                        <input type="text" name="name" class="form-control" value="{{$careersreply->name}}" require  readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="phone" name="phone" class="form-control" value="{{$careersreply->phone}}" require readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="profile_image"> Profile Image </label>
                                        <input type="file" name="profile_image" class="form-control" value="{{$careersreply->profile_image}}" require readonly>
                                        <img src="/uploads/front/careers/{{$careersreply->profile_image}}"  alt="{{$careersreply->profile_image}}" width="10%" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control" value="{{$careersreply->email}}" require readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="experience"> Experience </label>
                                        <input type="text" name="experience" class="form-control" value="{{$careersreply->experience}}" require readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="resume"> Resume </label>
                                        <input type="text" name="resume" class="form-control" value="{{$careersreply->resume}}" require readonly >
                                        <img src="/uploads/front/careers/{{$careersreply->resume}}"  alt="{{$careersreply->resume}}" width="10%" />
                                    </div>
                                </div>
                              
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_form">Your How You Hand About Us By</label>
                                        <input type="text" name="contact_form" class="form-control" value="{{$careersreply->contact_form}}" require readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description"> Description </label>
                                        <input type="text" name="description" class="form-control" value="{{$careersreply->description}}" require  readonly>
                                    </div>
                                </div>
                              
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reply"> Reply </label>
                                        <input type="text" name="reply" class="form-control" value="{{$careersreply->reply}}" require>
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
