<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>@yield('title') | Bookshelf</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet" />

  <style>
  .ck-editor__editable_inline {
    min-height: 200px;
  }
  </style>

  <!-- Scripts -->
  @vite(['resources/sass/app.scss'])
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>

<body>
  <div id="app" class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Bookshelf Application</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto"></ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
            </li>
            @endif
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">สมัครเป็นนักเขียน</a>
            </li>
            @endif
            @else
            <!-- Display user name and logout button as separate items -->
            <li class="nav-item">
              <span class="nav-link">{{ Auth::user()->name }}</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home">บทความ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                ออกจากระบบ
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main content area -->
    <div class="container py-4 flex-grow-1">
      @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 mt-auto" style="background-color: #343a40; color: white;">
      <div class="container">
        <p class="mb-0">&copy; 2024 My Blog. All Rights Reserved.</p>
      </div>
    </footer>
  </div>
</body>

</html>