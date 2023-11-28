<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('decrypt-login')}}" method="POST">
        @csrf
        <h1>login form</h1>
        <label for="">Email</label>
        <input type="email" name="email" id=""><br><br>
        <label for="">Password</label>
        <input type="text" name="password" id=""><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>