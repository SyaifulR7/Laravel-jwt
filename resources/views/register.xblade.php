<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="post" action="{{('register')}}">
        <span><h4>name</h4></span>
        <input type="text" id="name" name="name" placeholder="name">
        <span><h4>genre</h4></span>
        <input type="text" id="genre" name="genre" placeholder="genre">
        <span><h4>email</h4></span>
        <input type="email" id="email" name="email" placeholder="email">
        <span><h4>password</h4></span>
        <input type="password" id="password" name="password" placeholder="password">
        <span><h4>password_confirmation</h4></span>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation">
        <br><br>
        <button type="submit">send</button>
    </form>
</body>
</html>