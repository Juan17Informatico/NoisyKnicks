<?php

require('conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ref_producto = $_POST['ref_producto'];
$n_tel = $_POST['n_tel'];
$fecha = $_POST['fecha'];
$seleccionar_pago = $_POST['seleccionar_pago'];

$insertar = "INSERT INTO pedido VALUES ('$ref_producto','$nombre', '$n_tel', '$correo', '$seleccionar_pago', '$fecha') ";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo"<script>alert('PEDIDO REALIZADO CON EXITO');
    window.location.href='../Pedido/bootstrap4b-plantilla-inicial-master/index.php'</script>";
}
else{
    echo"<script>alert('No se pudo realizar el pedido'); windows.history.go(-1);</script>";
}
?>
