<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferir</title>
</head>
<body>
    <h1>Transferir</h1>
    <div class="container">
        <form action="./ProcesarIngreso.php" method="post">
            <div class="form-group">
                <label for="numCuenta">Número de cuenta</label>
                <input type="number" name="numCuenta" id="numCuenta" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="SaldoTrans">Saldo a transferir</label>
                <input type="number" name="SaldoTrans" id="SaldoTrans" class="form-control">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Transferir</button>
            </div>
        </form>
    </div>
</body>
</html>
