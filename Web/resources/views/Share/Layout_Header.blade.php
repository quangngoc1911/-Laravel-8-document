<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>@yield('title', $title)</title>
    <link rel="stylesheet" href="{{asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{asset('/css/style.css') }}">
  </head>
  <body>
    @yield('content')
  </body>
</html>