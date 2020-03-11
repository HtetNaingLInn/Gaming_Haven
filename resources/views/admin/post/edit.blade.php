@extends('layout.master')

@section('title','Add Post')

@section('content')
    <div class="container col-md-8 mt-4">
            <div class="card border-success">
                <div class="card-header bg-dark">
                    <h5 class="text-success"><i class="fa fa-clone" aria-hidden="true"></i>&nbsp;Add Posts Here </h5>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                      @if (session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                      @endif

                      @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                      @endforeach
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                          <label for="title">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$post->title}}">
                          
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{$post->price}}">
                            
                          </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$post->description}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Image</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{$post->img}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Category</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="cat_id">
                              @foreach ($cats as $cat)
                                  
                             

                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                              @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-outline-dark text-success">Edit</button>
                      </form>
                 </div>
            </div>
            </div>
    </div>
@endsection