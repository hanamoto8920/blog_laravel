<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>@yield('title')</title>
</head>

<body>
  <div class="header">
    @include('header')
  </div>
  <div class="container">
    <div class="content">
      @yield('content')
    </div>
  </div>
  <div class="footer">
    @include('footer')
  </div>
</body>

</html>