<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('home/css/login-register.css') !!}">
    <title>Register</title>
</head>
<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div>
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Register</h3>
                        </div>
                        <form method="post" action="{{('register')}}">
                            <div class="p-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <label for="email" class="form-label mt-2">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <label for="genre" class="form-label mt-2">Genre</label>
                                <input type="text" class="form-control" id="genre" name="genre">
                                <label for="password" class="form-label mt-2">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <label for="password_confirmation" class="form-label mt-2">Password Confirmation</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>                
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>