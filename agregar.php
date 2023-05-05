<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="containerForm">
        <h1>Cuenta</h1>
        <form action="mostrar.php" method="post">
            <div class="info">
                <label for="">Nombre Titular</label>
                <input type="text" name="name" id="name">
            </div>
            
            <div class="info">
                <label for="">Tipo Cuenta</label>
                <input type="text" name="cuenta" id="cuenta">
            </div>
            
            <div class="info">
                <label for="">Numero de cuenta</label>
                <input type="number" name="numero" id="numero">
            </div>
            
            <div class="info">
                <label for="">Saldo</label>
                <input type="number" name="saldo" id="saldo">
            </div>
            <div class="submit">
                <input type="submit" value="Enviar" >
            </div>
        </form>
    </div>
</body>
</html>