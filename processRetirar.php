<?php
    require_once 'Cuenta.class.php';
    require_once 'mostrar.php';
    $numeroCuenta = isset($_POST['numCuenta'])? $_POST['numCuenta']:'';
    $numeroCuentaTr = isset($_POST['numCuentaP'])? $_POST['numCuentaP']:'';
    $Monto= isset($_POST['SaldoTrans'])? $_POST['SaldoTrans']:'';
    foreach ($_SESSION['cuentas'] as $arrayCuenta) {
        if ($numeroCuenta === $arrayCuenta->getNumeroCuenta()) {
            echo "Hola"." ".$arrayCuenta->getNombretitular()." "."Haz modificado tu saldo";
            echo "<br>";
            echo "Tu nuevo saldo es de: "." ".$arrayCuenta->retirarDinero($Monto);
        }
    }