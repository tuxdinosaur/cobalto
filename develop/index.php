<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COBALTO</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">COBALTO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Ayuda</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">

    <main class="container home">
      <section class="row home__section">

        <!-- Columna de descirpción -->
        <div class="col-12 col-md-6 mb-3">
          <h1 class="description-title">
            <span class="description-title--light">El empoderamiento y futuro de la educación </span>
            <span class="description-title--bold">a través de la nueva industria.</span>
          </h1>
          <p class="mt-3 mt-md-5 description-text">
            Obtén una cuenta ahora y empieza ahora mismo, o simplemente inicia sesión.
          </p>
        </div>

        <!-- Columna login container -->
        <div class="col-12 col-md-6 log">

          <div class="log__container">

            <!-- Tablas -->
            <ul class="nav nav-pills mb-3 log__container--tabs" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">
                  <?xml version="1.0" encoding="UTF-8"?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18pt"
                    height="18pt" viewBox="0 0 64 64" version="1.1">
                    <g id="surface3271568">
                      <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;"
                        d="M 47.8125 7.9375 C 45.71875 7.9375 43.625 8.75 42 10.375 L 10.375 42 L 10.25 42.625 L 8.0625 53.625 L 7.4375 56.5625 L 10.375 55.9375 L 21.375 53.75 L 22 53.625 L 53.625 22 C 56.875 18.75 56.875 13.625 53.625 10.375 C 52 8.75 49.90625 7.9375 47.8125 7.9375 Z M 47.8125 11.75 C 48.820312 11.75 49.835938 12.210938 50.8125 13.1875 C 52.757812 15.132812 52.757812 17.242188 50.8125 19.1875 L 49.375 20.5625 L 43.4375 14.625 L 44.8125 13.1875 C 45.789062 12.210938 46.804688 11.75 47.8125 11.75 Z M 40.625 17.4375 L 46.5625 23.375 L 22.375 47.5625 C 21.0625 45 19 42.9375 16.4375 41.625 Z M 13.875 44.875 C 16.273438 45.84375 18.15625 47.726562 19.125 50.125 L 12.5625 51.4375 Z M 13.875 44.875 " />
                    </g>
                  </svg>
                  <span class="tab__text">Registro</span>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18pt"
                    height="18pt" viewBox="0 0 32 32">
                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;"
                      d="M20 3C15.054688 3 11 7.054688 11 12C11 12.519531 11.085938 12.976563 11.15625 13.4375L3.28125 21.28125L3 21.59375L3 29L10 29L10 26L13 26L13 23L16 23L16 20.03125C17.179688 20.609375 18.554688 21 20 21C24.945313 21 29 16.945313 29 12C29 7.054688 24.945313 3 20 3 Z M 20 5C23.855469 5 27 8.144531 27 12C27 15.855469 23.855469 19 20 19C18.789063 19 17.542969 18.644531 16.59375 18.125L16.34375 18L14 18L14 21L11 21L11 24L8 24L8 27L5 27L5 22.4375L12.90625 14.5L13.28125 14.15625L13.1875 13.625C13.085938 13.023438 13 12.488281 13 12C13 8.144531 16.144531 5 20 5 Z M 22 8C20.894531 8 20 8.894531 20 10C20 11.105469 20.894531 12 22 12C23.105469 12 24 11.105469 24 10C24 8.894531 23.105469 8 22 8Z" />
                  </svg>
                  <span class="tab__text">Inicia sesión</span>
                </a>
              </li>
            </ul>

            <!-- Tablas contenido -->

            <div class="tab-content" id="pills-tabContent">

              <!-- Tabla registro -->

              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
                <label for="basic-url">Usuario</label>
                <div class="input-group mb-3">
                  <input type="text" name="usuario" class="form-control" placeholder="">
                </div>

                <label for="basic-url">Contraseña</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="">
                </div>

                <label for="basic-url">Confirmar contraseña</label>
                <div class="input-group mb-3">
                  <input type="password" name="password2" class="form-control" placeholder="">
                </div>

                <div class="tab-register__button">
                  <button type="button" class="btn btn-light" onclick="login.submit()">Crear cuenta</button>
                </div>

              </div>

              <!-- Tabla Inicio de sesión -->

              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <label for="basic-url">Usuario</label>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
                <div class="input-group mb-3">
                    <input type="text" name="usuario" class="form-control" placeholder="">
                </div>

                <label for="basic-url">Contraseña</label>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="">
                </div>

                <div class="tab-register__button">
                    <button class="btn btn-light" type="button" onclick="login.submit()">Inicia sesión</button>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

    </main>

  </div>

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>