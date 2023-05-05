<?php
    require_once 'Cuenta.class.php';
    require_once 'mostrar.php';
    $numeroCuenta = isset($_POST['numCuentaP'])? $_POST['numCuentaP']:'';
    $Option = isset($_POST['Seleccionar'])? $_POST['Seleccionar']:'';
    $i =0;
    foreach ($_SESSION['cuentas'] as $arrayCuenta) {
        if ($numeroCuenta === $arrayCuenta->getNumeroCuenta()) {
            echo "Hola"." ".$arrayCuenta->getNombretitular();
            if($Option === "Agua"){
                $Monto = 50;
            }else if($Option === "Luz"){
                $Monto = 20;
            }else{
                $Monto = 30;
            }
            echo "<br>";
            echo $arrayCuenta->pagarFactura($Monto);
        }
    }