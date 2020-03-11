@extends('layout.master')

@section('title','All Category')

@section('content')
<div class="container col-md-8 mt-2">

  @if (session('status'))
<p class="alert alert-success">{{session('status')}}</p>
  @endif

    <table class="table mt-4 table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">GENERATE</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            
          <tr>

          <th scope="row">{{$category->id}}</th>
          <a href="">
          <td>{{$category->name}}</td>
        
        </a>
    <td>&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i><a href="{{action('admin\CategoryController@edit',$category->id)}}">Edit</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
@endsection