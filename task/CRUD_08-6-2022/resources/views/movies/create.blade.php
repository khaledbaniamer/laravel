@extends('navbar')


@section('content')
@if ($message = Session::get('succ'))
    
<div class="alert alert-success" role="alert">
    {{$message}}
</div>
@endif
<div class="container border mt-5" style="width: 70%">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h3 class="p-3">Add New Movie</h3>
        <hr>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Movie Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Movie Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Generate Year</label>
            <input type="date" class="form-control" name="year">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image</label>
            <input type="file" class="form-control" name="file">
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-3">ADD</button>
    </form>
</div>  
@endsection