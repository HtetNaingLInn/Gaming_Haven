@extends('layout.master')

@section('title','All User')


@section('content')

<div class="container col-md-8">

    <table class="table mt-4 table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PHONE.NO</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            
          <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
@endsection