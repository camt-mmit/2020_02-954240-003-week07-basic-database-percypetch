<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MyDB - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <header>
      <h1>@yield('title')</h1>
      <nav>
        <a href="/product">Product</a>
        <a href="/shop">Shop</a>
      </nav>
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      &#xA9; Copyright Week-07, 2020 Kittipoom's DB
    </footer>
  </body>
</html>
