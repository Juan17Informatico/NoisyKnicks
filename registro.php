<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Registrarse</title>
  <link rel="shortcut icon" href="assets/icono.png">
  <link href="cssProyecto/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <!---->
</head>


<body style="background-image: url('assets/login.jpg');">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main ">
        <div class=" container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #f5f5f5;">
              <div class="card-header">
                <h3 class="text-center font-weight-light my-4">
                  Registrate
                </h3>
              </div>
              <div class="card-body">
                <!---->
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRegister" autocomplete="off">
                  <!---->
                  <div class="form-floating mb-3">
                    <select class="form-control" name="tipoUsuario" id="tipoUsuario">
                      <option value="Empresa" id="1">Empresa</option>
                      <option value="Persona" id="2">Persona</option>
                    </select>
                    <label for="tipoUsuario"> Tipo de cliente </label>
                  </div>
                  <!---->
                  <div class="row mb-3">
                    <!---->
                    <div class="col-md-6">
                      <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="identificacion" type="text" placeholder="Cédula / NIT" name="identificacion" required />
                        <label for="identificacion">Cédula / NIT</label>
                      </div>
                    </div>
                    <!---->
                    <div class="col-md-6">
                      <!---->
                      <div class="form-floating">
                        <input class="form-control" id="telefono" type="text" placeholder="Teléfono" name="telefono" />
                        <label for="telefono">Teléfono</label>
                      </div>
                      <!---->
                    </div>
                    <!---->
                  </div>
                  <!---->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="name" placeholder="Nombre Completo / Nombre Empresa" name="name" required />
                    <label for="name">Nombre Completo / Nombre Empresa</label>
                  </div>
                  <!---->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" required />
                    <label for="inputEmail">Correo electrónico</label>
                  </div>
                  <!---->
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password" required />
                        <label for="inputPassword">Contraseña</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="password_c" required />
                        <label for="inputPasswordConfirm">Confirmar contraseña</label>
                      </div>
                    </div>
                  </div>
                  <div class="form">
                    <p class="text-danger">
                      <?php
                      if (!empty($ErrorMSG)) {

                      ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                          <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                      <?php
                        echo $ErrorMSG;
                      }
                      ?>
                    </p>
                  </div>
                  <div class="mt-4 mb-0">
                    <div class="d-grid">
                      <input type="submit" class="btn btn-outline-danger btn-block" value="Registrarse">
                    </div>
                  </div>
                </form>


              </div>
              <div class="card-footer text-center py-3">
                <div class="small">
                  <a href="login.php">¿ya tienes una cuenta? Inicia sesión</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </main>
  </div>

  <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted" style="margin-bottom: 1%">
          Todos los derechos reservados &copy; IENEL SAS 2021
        </div>

        <div>
          <a href="#">Privacy Policy</a>
          &middot;
          <a href="#">Terms &amp; Conditions</a>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">
          ienel@ienel.co| Tel.: (+574) 5909272 | Cel.: 3116850669
        </div>
        <div>
          <li class="et-social-icon et-social-facebook">
            <a href="https://es-la.facebook.com/ienelsas" target="_blank" class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" style="color: black" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
            </a>
          </li>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <script src="js/scripts.js"></script>
  <!----->
</body>

</html>