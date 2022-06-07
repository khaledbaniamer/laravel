<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Upload</title>
</head>
<body>
    @if ($message = Session::get('success'))
        <div style="color: green">{{$message}}</div>
    @endif

    @if ($message = Session::get('failed'))
        <div style="color: red">{{$message}}</div>
    @endif
    <div class="container mt-5">
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Upload File</h3>
        <div class="mb-3">
          
          <input type="file" class="form-control" name="file"">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>