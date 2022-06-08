<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <ul class="nav">
      <li class="nav-item">
        <h3 class="nav-link active disabled"  aria-current="page" href="/home">Netflix</h3>
      </li>
        <li class="nav-item">
          <a class="nav-link active p-3" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-3" href="/add">Add Movie</a>
        </li>
      </ul>

      @yield('content')