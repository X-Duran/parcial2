<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($datos as $nombre => $value)
    <div>
      <h2>{{$nombre . ":" . $value}}</h2>
    </div>
    @endforeach
  </body>
</html>
