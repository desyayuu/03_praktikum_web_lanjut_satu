<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{Route('hm')}}">NAVBAR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">

                    {{-- <a class="nav-link active" aria-current="page" href="{{Route('hm')}}">Home</a> --}}
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Product
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{Route('meg')}}">Edu Games</a></li>
                      <li><a class="dropdown-item" href="{{Route('mkg')}}">Kids Games</a></li>
                      <li><a class="dropdown-item" href="{{Route('rs')}}">Riri Story</a></li>
                      <li><a class="dropdown-item" href="{{Route('kk')}}">Kolak Kids</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('nw')}}">News</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Program
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{Route('kr')}}">Karir</a></li>
                      <li><a class="dropdown-item" href="{{Route('mg')}}">Magang</a></li>
                      <li><a class="dropdown-item" href="{{Route('ki')}}">Kunjungan Industri</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('abt')}}">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Contact Us</a>
                  </li>
                  
                </ul>
            </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
