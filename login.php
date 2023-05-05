<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
  </head>
  <body>
    <div class="container">
      <h1>Iniciar sesión</h1>
      <form action="./processLogin.php" method="post">
        <label for="username">Nombre de titular</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Numero de cuenta</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Iniciar sesión</button>
      </form>
      <div class="links">
        <a href="#">¿Olvidaste tu contraseña?</a>
        <a href="./index.php">Crear una cuenta</a>
      </div>
    </div>
  </body>
</html>
