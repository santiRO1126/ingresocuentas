<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Transferir</h1>
    <div class="container">
        <form action="./processRetirar.php" method="post">
            <div class="info">
                <label for="">Numero de Cuenta a retirar</label>
                <input type="number" name="numCuenta" id="numCuenta">
            </div>
            
            <div class="info">
                <label for="">Saldo a retirar</label>
                <input type="number" name="SaldoTrans" id="SaldoTrans">
            </div>
            <div class="submi">
                <input type="submit" value="Transferir">
            </div>
        </form>
    </div>
</body>
</html>