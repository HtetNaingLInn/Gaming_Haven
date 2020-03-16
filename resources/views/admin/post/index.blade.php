@extends('layout.master')

@section('title','All Posts')

@section('content')

<div class="container fluid">
    
    <table class="table table-condensed">
        <thead>
            <div class="alert">
                @if (session('status'))
        <p class="alert alert-success">{{session('status')}}</p>
            @endif
            </div>
                <tr>
                    <th scope="col">All Upload Posts</th>
                    <th scope="col">Edit</th>
                    
                </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                
            
            <tr>

                <td >
                    <div class="row">
                        
                    
                        <div class="img-thumbnail col-md-2 bg-dark">
                             <img src="{{asset('/upload/'.$post->img)}}" alt="..." class="img-responsive w-100 pt-1"/>
                        </div>
                    
                
									<div class="col-md-8">
                                    <h4 class="nomargin">{{$post->title}}</h4>
                                    <p>{{Str::limit($post->description,200)}}</p>// to show the string (limit)
									</div>
                    </div>
                </td>
                <td >
                    <div class="col-md-2">
                <div class="row">
                    
                 
                <a href="{{action('admin\PostController@edit',$post->id)}}"><button class="btn btn-outline-dark text-success my-2"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                <a href="{{action('admin\PostController@destroy',$post->id)}}"><button class="btn btn-outline-dark text-success"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                
                </div>

                </div>
                </td>
            </tr>
            @endforeach
            <div class="col-md-12">
                {{ $posts->links() }}
            </div>
        </tbody>
        
    </table>
    
</div>


    
@endsection