<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"           integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>@yield('title', $title)</title>
</head>
<body>
    <div class="container">
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h2 style="text-align: center;" class="my-3">Login</h2>
             @if(session('success'))
            <p class="alert alert-success">{{session('success')}}</p>
            @endif
            @if(Session::has('status'))
            <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
            </div>
             @endif
        <form action="/doLogin" method="post">
            @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{old ('email')}}"/>
            <label class="form-label" for="email">Email address</label>
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control form-control-lg" />
            <label class="form-label" for="password">Password</label>
          </div>
          <div class="d-flex justify-content-around align-items-center mb-4">
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block form-control">Login</button>
          <p class="small fw-bold mt-2 pt-1 mb-0" style="text-align: center;">Belum punya akun ? <a href="{{('/register')}}"
           class="link-danger">Register</a></p>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>







