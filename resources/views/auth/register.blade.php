@extends('layout.master')

@section('title','Register')
@section('content')
    <div class="container mt-5 col-lg-6">
        <div class="card border-success">
          <div class="card-header text-success bg-dark text-center">Register Here</div>
          <div class="card-body">
            <form method="POST">

              {{ csrf_field() }}

              @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
              @endforeach
              
                <div class="form-group">
                    <label for="username" class="text-success">Username</label>
                    <input type="username" class="form-control" id="exampleInputEmail1" name="name">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="text-success">Phone no.</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="09-">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="text-success">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  <small id="emailHelp" class="form-text text-success">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-success">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-success">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="confirm your password">
                  </div>
                
                <button type="submit" class="btn btn-outline-dark text-success float-right">Register</button>
              </form>
          </div>
        </div>
    </div>
@endsection