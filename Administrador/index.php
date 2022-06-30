<?php
require("../Conexion/conexion.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stilo.css">
    <script class="../Libs/BootStrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../Libs/BootStrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>

    <!-- BANDA CON LOGO -->
    <main>
        <form action="login/index.php" method="POST">
            <div class="tarjeta d-flex justify-content-between" id="1">
                <a title="NoisyKnicks" href="../index.php" class="m-auto p-0"><img src="../img/Página/Logo.jpeg" alt="NoisyKnicks" /></a>
                <a href="../index.php" class="m-0 p-0 img1"><img src="../img/Página/cerrar-sesion.png" alt="NoisyKnicks"></a>
            </div>
        </form>
    </main>

    <!-- TABLA -->
    <div class="container mt-3">
        <div class="row">
            <h2 class="text-center text-dark fw-bold">LISTADO DE VENTAS</h2>
            <div class="col" id="div1">
                <table class="table table-striped table-bordered border-dark table-hover caption-top table-fixed">
                    <thead class="table-dark" style="margin-right:1em;">
                        <tr>
                            <th>ID</th>
                            <th>Ref Producto</th>
                            <th>Nombre Completo</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Mdo Pago</th>
                            <th>Fecha Pedido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $mysqli = "SELECT * from pedido";
                        $result = mysqli_query($conexion, $mysqli);
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $mostrar['id'] ?></td>
                                <td><?php echo $mostrar['Referencia_Producto'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Telefono'] ?></td>
                                <td><?php echo $mostrar['Correo'] ?></td>
                                <td><?php echo $mostrar['Mdo_Pago'] ?></td>
                                <td><?php echo $mostrar['Fecha_Pedido'] ?></td>
                            </tr>


                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>