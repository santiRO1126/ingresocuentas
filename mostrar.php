<?php
require_once 'Cuenta.class.php';
session_start();
$numCuenta = isset($_POST['numero'])? $_POST['numero']:'';
$nombre = isset($_POST['name'])? $_POST['name']:'';
$saldo = isset($_POST['saldo'])? $_POST['saldo']:'';
$tipo = isset($_POST['cuenta'])? $_POST['cuenta']:'';

$cuenta = new Cuenta($nombre, $tipo, $numCuenta, $saldo);

if (isset($_SESSION['cuentas'])) {
    $arrayCuentas = $_SESSION['cuentas'];
    $arrayCuentas[] = $cuenta;
    $_SESSION['cuentas'] = $arrayCuentas;
}
else{
    echo 'La primera cuenta';
    $_SESSION ['cuentas'] = array($cuenta);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
</head>
<body>

    <div class="container">
    <h1>Se creo la cuenta</h1>
        <?php
            echo '<hr>';
            echo '<pre>';
            echo 'Las cuentas ingresadas: ';
            print_r($_SESSION['cuentas']);
            echo '</pre>';
            echo '<hr>';
        ?>
    </div>
    <a href="menu.html">Regresar</a> <br>
    <script>
            swal("Agregado con exito","","success");
    </script>
</body>
</html>


