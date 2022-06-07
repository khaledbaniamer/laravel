<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container mt-5" style="width:50%">
    <form action="register" method="post">
        @csrf
        <h1>Register Form</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error('email')
            
        <h4 style="color: red">{{$message}}</h4>
        @enderror
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        @error('name')
            
        <h4 style="color: red">{{$message}}</h4>
        @enderror
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        @error('password')
            
        <h4 style="color: red">{{$message}}</h4>
        @enderror
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Age</label>
          <input type="number" placeholder="Your age must be more than 18" class="form-control" name="age">
        </div>

        @error('age')
            
        <h4 style="color: red">{{$message}}</h4>
        @enderror


        

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>