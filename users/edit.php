<html>

<head>
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="./edit.css">
</head>

<body>
  <?php
  include_once ("../conexion.php");
  $user_id = $_GET['user'];
  $user = $conn->query("select * from usuarios where id = " . $user_id . ";")->fetch_assoc();
  ?>


  <h1>Editar usuario</h1>
  <form action="update.php" class="form" method="post">
    <input name="userId" type="hidden" value="<?= $user['id'] ?>">
    <label>
      Nombre: <input name="userName" type="text" value="<?= $user['nombre'] ?>">
    </label>
    <label>
      Correo: <input name="userEmail" type="text" value="<?= $user['correo'] ?>">
    </label>
    <input type="submit" value="Guardar" name="update" />
  </form>

  <a href="index.php">&lt;--- Volver</a>

</body>

</html>