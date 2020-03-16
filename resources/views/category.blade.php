@extends('layout.master')

@section('title','category')



@section('content')
    <div class="container">
        <hr color="success">
        <div class="col-md-12">
            <div class="btn-group dropright">
                <button type="button" class="btn btn-outline-dark text-success dropdown-toggle" data-toggle="dropdown"  >
                  Search By Category
                </button>
                <div class="dropdown-menu">
                    <a href="{{url('/')}}">
                        <button class="btn btn-light">All Post</button>
                        </a>
                 @foreach ($cats as $cat)
                <a href="{{action('PageController@cat',$cat->id)}}">
                <button class="btn btn-light">{{$cat->name}}</button></a>
                 @endforeach
                </div>
              </div>
        </div>
        <hr color="success">

    <div class="row mt-3">
        @foreach ($posts as $post)
        <div class="item col-lg-3 col-md-6 mt-5">
            <div class="thumbnail card  border-success">
                <div class="card header">
                <a href="{{action('PageController@show',$post->id)}}"> <img class="img img-thumbnail bg-dark" src="{{asset('/upload/'.$post->img)}}" alt="" />
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
    {{-- <div class="col-12 pagination justify-content-center mt-3">
        {{ $posts->links() }}
    </div> --}}

</div>

    </div>

@endsection