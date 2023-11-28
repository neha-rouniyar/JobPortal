<html>
    <body>
        <form action="{{url('encrypt-signupform')}}" method="POST">
            @csrf
            <h1>signup form</h1>
            <label for="">Name</label>
            <input type="text" name="name"><br><br>
            <label for="">Email</label>
            <input type="email" name="email"><br><br>
            <label for="">Password</label>
            <input type="text" name="password"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>