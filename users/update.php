<html>

<head>
  <title>Update User</title>
</head>

<body>
  <?php
  include_once ("../conexion.php");
  $userId = $_POST['userId'];
  $userName = $_POST['userName'];
  $userEmail = $_POST['userEmail'];
  $query = "UPDATE usuarios SET nombre='" . $userName . "', correo='" . $userEmail . "' WHERE id=" . $userId;

  $result = $conn->query($query);

  if ($result == TRUE) {
    echo "Usuario actualizado";
  } else {
    echo "Error:" . $query . "<br>" . $conn->error;
  }
  ?>
</body>

</html>