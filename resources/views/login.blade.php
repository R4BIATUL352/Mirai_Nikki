<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Mirai Nikki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Mirai Nikki</b><br>Aplikasi Diary Masa Depan</h2>
            <hr>
            @if(session('error'))
                <div class="alert alert-danger">
                    <b>Opps! </b>{{ session('error') }}
                </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
            <hr>
            <p class="text-center">Belom punya akun? <a href="#">Register</a> sekarang!</p>
            </form>
        </div>
   </div>
</body>
</html>