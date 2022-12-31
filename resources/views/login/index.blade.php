<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Untitled Project">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
    <!-- Custom styles for this template -->
    <link href="login/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="container">
    <div class="row">
      <main class="form-signin w-100 m-auto">
        <form>
          <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          <h1 class="h4 mb-3 fw-normal">Please sign in</h1>
  
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <form action="/dashboard" method="post">
            @csrf
            <button class="px-3 btn btn-lg btn-primary" type="submit">Sign in</button>
          </form>
          <p class="mt-5 mb-3 text-muted">Copyright © 2022 Untitled Project</p>
        </form>
      </main>
    </div>  
  </div>  
  </body>
</html>