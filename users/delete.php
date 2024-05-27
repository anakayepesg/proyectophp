<html>

<head>
  <title>Eliminar Usuario</title>
</head>

<body>

  <?php
  include_once ("../conexion.php");
  $userId = $_GET['user'];
  $query = "DELETE FROM usuarios WHERE id=" . $userId;

  $result = $conn->query($query);

  if ($result == TRUE) {
    echo "Usuario eliminado";
  } else {
    echo "Error:" . $query . "<br>" . $conn->error;
  }
  ?>
</body>

</html>