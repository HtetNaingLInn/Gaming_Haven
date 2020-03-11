@extends('layout.master')
@section('title','Login')

@section('content')
    <div class="container mt-4 col-lg-6">
        <div class="card border-success">
          <div class="card-header text-success text-center bg-dark">Login Here</div>
          <div class="card-body">
            <form method="POST">
                {{ csrf_field() }}
                @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                <div class="form-group">
                    <label for="username" class="text-success">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                    
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="text-success">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-success">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label text-success" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-outline-dark text-success float-right">Login</button>
                
              </form>
          </div>
        </div>

    </div>
@endsection