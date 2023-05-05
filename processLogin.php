<?php
    require_once 'Cuenta.class.php';
    require_once 'mostrar.php';
    $Nombretitular = isset($_POST['username'])? $_POST['username']:'';
    $Password = isset($_POST['password'])? $_POST['password']:'';
    foreach ($_SESSION['cuentas'] as $arrayCuenta) {
        if ($Password === $arrayCuenta->getNumeroCuenta()) {
            echo "Hola"." ".$arrayCuenta->getNombretitular();
            echo "<script> alert('Bienvenido {$arrayCuenta->getNombretitular()}') </script>";
            echo "<br>";
            echo $arrayCuenta->pagarFactura($Monto);
        }
    }