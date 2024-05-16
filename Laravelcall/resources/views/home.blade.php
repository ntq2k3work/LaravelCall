<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    Bạn đang ở home <br>
    Xin chào {{ auth()-> user() -> name }} <br>
    Email : {{ auth()-> user() -> email }}
    <a href="{{ route('logout') }}">Log out</a>
</body>
</html>
