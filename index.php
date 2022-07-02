<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stilo.css">
    <link rel="icon" href="../NoisyKnicks/img/ICN/Home.png">
    <title>Inicio</title>
</head>

<body>


    <!-- BANDA CON LOGO -->
    <main>
        <form action="login/index.php" method="POST">
            <div class="tarjeta d-flex justify-content-between" id="1">
                <a title="NoisyKnicks" href="../NoisyKnicks/index.php" class="m-auto p-0"><img src="img/Página/Logo.jpeg" alt="NoisyKnicks" /></a>
            </div>
        </form>
    </main>

    <div class="options__inside">
        <aside>
            <nav class="nav">

                <ul class="list">
                    <li class="list_item">
                        <div class="list_button">
                            <img src="assets/inicio.svg" class="list_img">
                            <a href="index.php" class="nav_link">Principal</a>
                        </div>
                    </li>
                    <li class="list_item">

                        <div class="list_button list_button--click">
                            <img src="assets/Catalogo.svg" class="list_img">
                            <a href="#" class="nav_link">Catálogo</a>
                            <img src="assets/Flecha.svg" class="list_arrow">
                        </div>

                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="login/CT_Calzado.php" class="nav_link nav_link--inside">Calzado</a>

                            </li>

                            <li class="list_inside">
                                <a href="login/CT_Ropa.php" class="nav_link nav_link--inside">Ropa</a>

                            </li>

                            <li class="list_inside">
                                <a href="login/CT_Accesorios.php" class="nav_link nav_link--inside">Accesorios</a>

                            </li>


                        </ul>

                    </li>

                    <li class="list_item">
                        <div class="list_button list_button--click">
                            <img src="assets/Contacto.svg" class="list_img">
                            <a href="#" class="nav_link">Contáctanos</a>
                            <img src="assets/Flecha.svg" class="list_arrow">
                        </div>

                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="login/Contactanos.php" class="nav_link nav_link--inside">Número</a>
                            </li>
                            <li class="list_inside">
                                <a href="login/Contactanos.php" class="nav_link nav_link--inside">Ubicación</a>
                            </li>
                        </ul>
                    </li>


                    <li class="list_item">
                        <div class="list_button list_button--click">
                            <img src="assets/Conocenos.svg" class="list_img">
                            <a href="login/Conocenos.php" class="nav_link">Conócenos</a>
                            <img src="assets/Flecha.svg" class="list_arrow">
                        </div>

                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="login/Conocenos.php" class="nav_link nav_link--inside">Misión y Visión</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </aside>
    </div>
    <script src="js/main.js"></script>

</body>

</html>