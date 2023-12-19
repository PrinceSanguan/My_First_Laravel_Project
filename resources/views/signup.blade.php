<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>This is Sign Up Page</title>
  <link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
</head>
<body>
  @include('header')
  <h1>This is Sign Up page!</h1>
  <form method="post">
    <input class="textbox" type="text" name="email" placeholder="email" autofocus><br>
    <input class="textbox" type="text" name="name" placeholder="name"><br>

    <input class="btn" type="submit" value="submit" name="submit">
  </form>
</body>
</html>