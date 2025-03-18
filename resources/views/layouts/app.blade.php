<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SpeedZone')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
    <nav>
          <ul>
            <li><a href="{{ asset('index') }}">HOME</a></li>
            <li><a href="{{ asset('car-list') }}">OUR CARS</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
            <li>
              <a href="#">
                <i class="fa-solid fa-bars"></i>
              </a>
            </li>
          </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 Araba Sitesi. Tüm hakları saklıdır.</p>
    </footer>
</body>
</html>
