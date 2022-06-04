<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    
    <form action="operation" method="POST">
        @csrf
        <input type="number" name="first_number" placeholder="Enter First Number"><br><br>
        <input type="number" name="second_number" placeholder="Enter Second Number"><br><br>

        <input type="submit" name="ops" value="add" >
        <input type="submit" name="ops" value="substract">
        <input type="submit" name="ops" value="multiply">
        <input type="submit" name="ops" value="divide">
        <br><br>
    </form>
    <span>The answer is :@if (isset($result)) {{$result}} @endif </span>
    
</body>
</html>