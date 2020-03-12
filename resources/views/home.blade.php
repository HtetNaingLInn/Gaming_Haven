@extends('layout.master')

@section('title','home')
@section('content')
<div class="container fluid">
    <div class="row mt-3">
        @foreach ($posts as $post)
        <div class="item col-lg-3 col-md-6 mt-5">
            <div class="thumbnail card  border-success">
                <div class="card header">
              <a href=""> <img class="img img-thumbnail bg-dark" src="{{asset('/upload/'.$post->img)}}" alt="" />
              </a> 
            </div>
                
                <div class="caption card-footer ">
                    <div class="row">
                    <div class="col-md-6 sm-6">
                    <h5 class="text-success">
                    {{$post->price}}$</h5>
                </div>
                <div class="col-md-6 sm-6">
                    <button class="btn btn-outline-dark text-success float-right">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @endforeach

</div>
    
@endsection