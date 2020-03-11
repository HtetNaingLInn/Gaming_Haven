@extends('layout.master')

@section('title','Dashboard')

@section('content')

<div class="container col-md-8  mt-4">

    @if (session('status'))
<p class="alert alert-success">{{session('status')}}</p>
    @endif

    <div class="card border-success">
        <div class="card-header bg-dark">
            <h5 class="text-success"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;User</h5>
        </div>
        <div class="card-body">
          
            <a href=""><button class="btn btn-outline-dark text-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add Role</button></a>
        <a href="{{url('admin/users')}}"><button class="btn btn-outline-dark text-success"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;View All Users</button></a>
    
    
        </div>
    </div>

<div class="card border-success mt-4">
    <div class="card-header bg-dark">
        <h5 class="text-success"><i class="fa fa-th-large" aria-hidden="true"></i>&nbsp;Category</h5>
    </div>
    <div class="card-body">
        
    <a href="{{url('admin/category/create')}}"><button class="btn btn-outline-dark text-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add Category</button></a>
    <a href="{{url('admin/category')}}"><button class="btn btn-outline-dark text-success"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;View All Category</button></a>


    </div>
</div>

<div class="card border-success mt-4">
    <div class="card-header bg-dark">
        <h5 class="text-success"><i class="fa fa-clone" aria-hidden="true"></i>&nbsp;Posts</h5>
    </div>
    <div class="card-body">
        
    <a href="{{url('admin/post/create')}}"><button class="btn btn-outline-dark text-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add Posts</button></a>
    <a href="{{url('admin/post')}}"><button class="btn btn-outline-dark text-success"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;View All Posts</button></a>


    </div>
</div>

</div>
    
@endsection