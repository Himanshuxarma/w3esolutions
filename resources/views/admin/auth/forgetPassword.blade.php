@extends('admin.layouts.master')
@section('customstyle')
@endsection
@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>W3E</b>solutions</a>
        </div>
        <div class="card-body">
            @if (Session::has('message'))
              <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
              </div>

            @endif
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
            <form action="{{ route('forget.password.post') }}" method="post">
                @csrf
                <div class="input-group mb-3">

                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  
                    <div class="input-group-append">
                        <div class="input-group-text">
                             @if ($errors->has('email'))
                                <span class="fas fa-envelope">{{ $errors->first('email') }}</span>
                              @endif
                        </div>
                    </div>
                  
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                 </div>
            </form>
            <div class="col-4 mt-4"><a href="{{route('login')}}">
                        <button class="btn btn-primary btn-block">Sign In</button>
                        </a>
                    </div>
        </div>
    </div>
</div>
@endsection
@section('customscript')
@endsection
