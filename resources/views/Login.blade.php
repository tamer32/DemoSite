<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token}}">
    <title></title>
    <link rel = "stylesheet" href = "/css/app.css">
  </head>
  <body>


    @include ('layout.style')
    @include('Layout.LoginStyle')
    {{ csrf_field() }}

  </body>
</html>
