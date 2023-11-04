<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/user_interface.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6a3af0d5cf.js" crossorigin="anonymous"></script>
    <title>Home_User</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/img/Logo_Blue.png" alt="" width="200px" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-content-between">
              <li class="nav-item">
                  <a class="nav-link active d-lg-none" aria-current="page" href="#">Generar comprobante de pago</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active d-lg-none" href="modificar_datos.html">Modificar información personal</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active d-lg-none" href="cambiar_contraseña.html">Cambiar contraseña</a>
              </li>
          </ul>
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <button type="button" class="btn btn-danger w-auto">Cerrar sesión</button>
              </li>
          </ul>
      </div>
      </div>
    </nav>
    <section class="general-container">
        <div class="container-options">
            <div class="container-button d-inline-block text-center">
                <a href="" type="button" class="btn btn-primary p-lg-4 mb-5 mt-5 align-middle">Generar comprobante de pago</a>
                <a href="modificar_datos.html" type="button" class="btn btn-primary p-lg-4 mb-5 ">Modificar información personal</a>
                <a href="cambiar_contraseña.html" type="button" class="btn btn-primary p-lg-4 mb-5 ">Cambiar contraseña</a>
            </div>
        </div>
        <header class="header">
            <div class="header-content">
                <h1>¿Qué deseas hacer hoy,</h1>
                <h1><span>#user?</span></h1>
            </div>
        </header>
    </section>
    <footer>
        <div class="footer-group">
          <div class="box-footer">
            <figure>
              <img src="assets/img/ECBT-11.png" alt="">
            </figure>
          </div>
          <div class="box-footer">
            <h2>Sobre nosotros</h2>
            <p>
              <i class="fa-solid fa-envelope" style="color: #bbbec3;"></i> andreapaz@gmail.com 
            </p>
            <p>
              <i class="fa-solid fa-phone" style="color: #bbbec3;"></i>
              962-149-5215
            </p>
            <p>
              <i class="fa-solid fa-phone" style="color: #bbbec3;"></i>
              962-118-0352 
            </p>
          </div>
          <div class="box-footer">
            <h2>¡Contáctanos!</h2>
            <div class="social-networks">
              <a href="https://www.facebook.com/ecbtballet" class="fb-network" target="_blank">
                <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
              </a>
              <a href="https://www.instagram.com/ecbtballet/" class="ig-network" target="_blank">
                <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
              </a>
              <a href="https://wa.me/529621495215" class="wa-network" target="_blank">
                <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="copyright">
          <small>&copy; 2023 <b>Escuela Cubana de Ballet de Tapachula</b> - Todos los derechos reservados.</small>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

</body>

</html>