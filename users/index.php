<html>

<head>
  <title>Usuarios</title>
</head>

<body>
  <?php
  include_once ("../conexion.php");
  $users = $conn->query("select * from usuarios");
  ?>

  <h1>Lista de usuarios</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
        <tr>
          <td><?= $user['id']; ?></td>
          <td><?= $user['nombre']; ?></td>
          <td><?= $user['correo']; ?></td>
          <td><a href="edit.php?user=<?= $user['id']; ?>">Editar</a></td>
          <td><a href="delete.php?user=<?= $user['id']; ?>">Eliminar</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>