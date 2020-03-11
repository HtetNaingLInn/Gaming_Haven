@extends('layout.master')

@section('title','Edit Category')
@section('content')
    <div class="container col-md-8">
        <div class="card border-success mt-4">
            <div class="card-header bg-dark">
                 <h5 class="text-success"> Edit Category</h5>
            </div>
            <div class="card-body">
                
                <form method="post">
                   {{ csrf_field() }}
                   @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
                   @endforeach
                        

                <input class="form-control" type="text" name="name" value="{{$cat->name}}">
                   
                    <button type="submit" class="btn btn-outline-dark text-success mt-3">Edit</button>
                   
                </form>
               
            </div>
        </div>
    </div>
@endsection