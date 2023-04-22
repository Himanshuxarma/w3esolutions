@extends('admin.layouts.master')
@section('customstyle')
@endsection
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>W3e</b>SOLUTIONS</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('login')}}" method="post">
      {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="email"name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password"class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="{{ route('forget.password.get') }}" class="btn btn-block btn-primary">
         Forgot Password
        </a>
       
      </div>
     </div>
  </div>
</div>

@endsection
@section('customscript')
@endsection