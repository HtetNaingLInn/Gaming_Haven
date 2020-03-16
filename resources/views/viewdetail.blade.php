@extends('layout.master')

@section('title')
    {{$post->name }}
@endsection

@section('content')
   <div class="container mt-3">
       <hr>
       <div class="col-md-12">
       <a href="{{url('/')}}"> <button class="btn btn-outline-dark text-success my-2">Back</button></a>
       </div>
       <hr>
       <div class="row">
           <div class="col-md-4">
           <img src="{{asset('/upload/'.$post->img)}}" class="img img-thumbnail bg-dark w-100" alt="">
           </div>
           <div class="col-md-8">
               <div class="container">
                   <div class="row">
                <h3>   {{ $post->title }}</h3>
                <i class="ml-5 text-danger">Price {{ $post->price }}$</i>
            </div>
                <button class="from form-control btn btn-outline-dark text-success my-2"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cart</button>
               </div>
            <h3 class="text-success">Description</h3>
           <p class="text text-justify">{{$post->description}}</p>
           <iframe width="700" height="315"
                    src="https://www.youtube.com/bH1lHCirCGIautoplay=1">
            </iframe>   
           </div>
       </div>
   </div>
@endsection