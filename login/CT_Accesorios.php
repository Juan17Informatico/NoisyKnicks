<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../css/stilo.css" />
  <link rel="stylesheet" href="../Libs/BootStrap/css/bootstrap.css" />
  <link rel="icon" href="../img/Iconos/reloj.png">
  <script class="../Libs/BootStrap/js/bootstrap.js"></script>
  <!-- <link rel="stylesheet" href="../css/logo.css"> -->
  <title>Accesorio</title>
</head>

<body>
  <!-- BANDA CON LOGO -->
  <main>
    <form action="login/index.php" method="POST">
      <div class="tarjeta d-flex justify-content-between" id="1">
        <a title="NoisyKnicks" href="../index.php" class="m-auto p-0"><img src="../img/Página/Logo.jpeg" alt="NoisyKnicks" /></a>
      </div>
    </form>
  </main>

  <!-- CONTENEDORES Y CARDS -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width: 400px; margin: 22px">
          <img class="card-img-top" src="../img/Accesorios/Accesorio1.jpeg" alt="Card image" style="width: 100%" />
          <div class="card-body">
            <?php $var = "12345" ?>
            <input type="text" id="12345" value="12345" disabled>
            <p class="card-text" style="color: black">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <a href="../Pedido/bootstrap4b-plantilla-inicial-master/index.php?variable=<?php echo $var ?>" class="btn btn-danger stretched-link">COMPRAR</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card" style="width: 400px; margin: 22px">
          <img class="card-img-top" src="../img/Accesorios/Accesorio2.jpeg" alt="Card image" style="width: 100%" />
          <div class="card-body">
            <?php $var = "67891" ?>
            <input type="text" id="67891" value="67891" disabled>
            <p class="card-text" style="color: black">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <a href="../Pedido/bootstrap4b-plantilla-inicial-master/index.php?variable=<?php echo $var ?>" class="btn btn-danger stretched-link">COMPRAR</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card" style="width: 400px; margin: 22px">
          <img class="card-img-top" src="../img/Accesorios/Accesorio3.jpeg" alt="Card image" style="width: 100%" />
          <div class="card-body">
            <?php $var = "2314435" ?>
            <input type="text" id="2314435" value="2314435" disabled>
            <p class="card-text" style="color: black">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <a href="../Pedido/bootstrap4b-plantilla-inicial-master/index.php?variable=<?php echo $var ?>" class="btn btn-danger stretched-link">COMPRAR</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>