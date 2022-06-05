<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/registratio.css">
    <title>Edite</title>
</head>
<body>
    <h1></h1>
    
    @if ($message = Session::get('success'))
    <div>
        <div class="success" >{{ $message }}</div>
    </div> 
    @endif
    <form action="update" method="POST" id="form" >
        @csrf
        <input type="hidden" value="{{$single_product->id}}" name="id">
        <h2>Update User Infromation</h2>
        <div>
            <label>Username</label><br>
            <input type="text" name="username"  class="input" value="{{$single_product->user_name}}">
        </div> 

        <div>
        @error('username')
            <div class="danger" >{{ $message }}</div>
        @enderror
        </div> 
        
        <div>
            <label>Email</label><br>
            <input type="email"  name="email"  class="input" value="{{$single_product->email}}">
        </div>

        <div>
            @error('email')
                <div class="danger" >{{ $message }}</div>
            @enderror
        </div> 
        <div>
            <label>Password</label><br>
             <input type="password"  name="password" class="input" value="{{$single_product->password}}">
        </div>

        <div>
            @error('password')
                <div class="danger" >{{ $message }}</div>
            @enderror
        </div> 

        <div>
            <label>Confirm Password</label><br>
            <input type="password"   name="confirm_password"  class="input" value="{{$single_product->password}}">
        </div>

        <div>
            @error('confirm_password')
                <div class="danger" >{{ $message }}</div>
            @enderror
        </div> 

        @if ($message = Session::get('fail'))
        <div>
            <div class="danger" >{{ $message }}</div>
        </div> 
        @endif
        
        <div>
            <button type="submit" id="register">UPDATE</button>
        </div>


    </form>

</body>
</html>