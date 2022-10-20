<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sundanese University | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  </head>
  <body>
    <div class="wrapper">
      <nav>
        <div class="container-flex">
          <div class="brand">
            <a href="https://www.instagram.com/syachril_bls">Sundanese University</a>
          </div>
          <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
          <div class="bg-sidebar"></div>
          <ul class="sidebar">
            <li><a href="/">Home</a></li>
            @if(Auth::user()->role_id !=2)
            @else
            <li><a href="/mahasiswa">Mahasiswa</a></li>
            @endif
            <li><a href="/fakultas">Fakultas</a></li>
            <li><a href="/ekskul">Ekskul</a></li>
            <li><a href="/dosen">Dosen</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
    @yield('content')
    <script src="/resources/js/app.js"></script>
  </body>
</html>
