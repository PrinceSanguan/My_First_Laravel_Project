<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>USer</title>
  @include('header')
</head>
<body>

  <table>
    <tr>
      <th>Username</th><th>Password</th><th>Date</th><th>Email Address</th>
    </tr>
        @foreach($data as $row)
    <tr>
        <td>{{$row->username}}</td>
        <td>{{$row->password}}</td>
        <td>{{$row->date}}</td>
        <td>{{$row->email}}</td>
    </tr>
        @endforeach
  </table>

</body>
</html>