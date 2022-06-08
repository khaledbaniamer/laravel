@extends('navbar')

@section('content')

<div class="card mb-5 mx-5 mt-5" style="max-width: 80% ">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('storage/movies_image/'.$movie->movie_image)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <label style="color: blue">Movie Name</label>
            <h6 class="card-title">{{$movie->movie_name}}</h6><hr>
          <label style="color: blue">Movie Description</label>
          <p class="card-text" style="height: 200px">{{$movie->movie_description}}</p> <hr>
          <label style="color: blue">Year Genrate</label>
          <p class="card-text"><small class="text-muted">{{$movie->movie_gener}}</small></p>
        </div>
      </div>
    </div>
  </div>
@endsection