<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="{{ route('home') }}"><h1>SBFAMS</h1></a>
  <li style="display: flex; flex-direction: column;">
    <a href="{{ route('student') }}">Students</a>
    <a href="{{ route('admin') }}">Admin</a>
    <a href="{{ route('accounts') }}">Account</a>
    <a href="{{ route('superUser') }}">Super User</a>
  </li>
  <div>
    @yield('content')
  </div>
</body>
</html>