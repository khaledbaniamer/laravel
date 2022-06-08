@extends('navbar')

@section('content')

@if ($message = Session::get('delete'))
    
<div class="alert alert-success" role="alert">
    {{$message}}
</div>
@endif

<div class="container mt-5">
    <table class="table table-striped table-hover mt-5">
        <thead >
          <tr>
            <th class="text-center" >#</th>
            <th class="text-center" >Name</th>
            <th class="text-center">Generate Year</th>
            <th class="text-center">Image</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($movies as $movie)
                
            <tr>
              <th scope="row">{{$movie->id}}</th>
              <td class="text-center">{{$movie->movie_name}} </td>
              <td class="text-center">{{$movie->movie_gener}}</td>
              <td class="text-center">{{$movie->movie_image}}</td>
      
              <td class="text-center">
                  <a class="btn btn-primary mx-2" href="/edit/{{$movie->id}}">Update</a>
                  <a class="btn btn-danger mx-2" href="delete/{{$movie->id}}">Delete</a>
                  <a class="btn btn-secondary mx-2" href="/view/{{$movie->id}}">View</a>
              </td>
            </tr>
            @endforeach
    
        </tbody>
      </table>
    </div>
@endsection