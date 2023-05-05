<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="./processFactura.php" method="post">
        <div class="info">
                <label for="">Ingresa tu numero de cuenta</label>
                <input type="number" name="numCuentaP" id="numCuentaP">
            </div>  
            <div class="info">
                <label for="">Elige la factura</label>
                <select name="Seleccionar" id=""> 
                    <option value="Luz">Luz</option>
                    <option value="Agua">Agua</option>
                    <option value="Arriendo">Arriendo</option>
                </select>
            </div>
            <div class="submi">
                <input type="submit" value="Pagar">
            </div>
        </form>
    </div>
</body>
</html>