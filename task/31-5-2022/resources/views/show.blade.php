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
  @if ($message = Session::get('success'))
      
  <div class="alert alert-success">
    {{$message}}
  </div>
  @endif
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->user_name}}</td>
              <td>{{$user->email}}</td>
              <td>
                  <input type="password" disabled value="{{$user->password}}">
              </td>
              <td>
                  <a href="user/{{$user->id}}" class="btn btn-success">Edit</a>
                  <a href="delete/{{$user->id}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>