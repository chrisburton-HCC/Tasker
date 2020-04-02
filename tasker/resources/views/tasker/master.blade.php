<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tasker - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div style='margin:12px; padding-left: 8px; border-left: 1px solid black; border-bottom: 2px solid gray;'>
    <h1>Tasker</h1>
    <h2>@yield('title')</h2>
</div>
<div class="container">
  @yield('content')
</div>
</body>
</html>
