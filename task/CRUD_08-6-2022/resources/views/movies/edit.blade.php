@extends('navbar')


@section('content')
@if ($message = Session::get('edit'))
    
<div class="alert alert-success" role="alert">
    {{$message}}
</div>
@endif
<div class="container border mt-5" style="width: 70%">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h3 class="p-3">Add New Movie</h3>
        <hr>
        <input type="hidden" value="{{$movie->id}}" name="id">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Movie Name</label>
            <input type="text" class="form-control" name="name" value="{{$movie->movie_name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Movie Description</label>
            <input type="text" class="form-control" name="description" value="{{$movie->movie_description}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Generate Year</label>
            <input type="date" class="form-control" name="year" value="{{$movie->movie_gener}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input type="file" class="form-control" name="file" value="{{$movie->movie_image}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <img src="{{asset('storage/movies_image/'.$movie->movie_image)}}" alt="" width="100px" height="100px">
        </div>
        <input type="hidden" name="hidden_image" value="{{$movie->movie_image}}">
        <button type="submit" class="btn btn-primary mb-5 mt-3">UPDATE</button>
    </form>
</div>  
@endsection