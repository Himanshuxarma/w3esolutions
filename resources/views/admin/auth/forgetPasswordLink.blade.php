@extends('admin.layouts.master')
@section('customstyle')
@endsection
@section('content')
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>W3e</b>SOLUTIONS</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
      <form action="{{ route('reset.password.post') }}" method="post">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="input-group mb-3">
          <input type="email" id="email" name="email"class="form-control" placeholder="email">
          <div class="input-group-append" >
            <div class="input-group-text">
            @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password"id="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
            @if ($errors->has('password'))
              <span class="fas fa-lock">{{ $errors->first('password') }}</span>
              @endif
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password_confirmation" name="password_confirmation"class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
            @if ($errors->has('password_confirmation'))
              <span class="fas fa-lock">{{ $errors->first('password_confirmation') }}</span>
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

@endsection
@section('customscript')
@endsection