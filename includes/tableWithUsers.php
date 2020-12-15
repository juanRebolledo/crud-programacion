<h3 class="title is-3" style="text-align: center;">Listado de usuarios</h3>
<div class="container">
  <div class="level">
    <div class="level-left">
    </div>
    <div class="level-right">
      <div class="level-item">
        <a href="./views/CreateUser.php" class="button is-primary">Agregar usuario</a>
      </div>
    </div>
  </div>

  <div class="columns is-centered">  
    <table class="table" style="width:100%;">
    <thead>
    <tr>
      <td><strong>#</strong></td>
      <td><strong>Nombre</strong></td>
      <td><strong>Usuario</strong></td>
      <td><strong>Correo</strong></td>
      <td><strong>Acciones</strong></td>
    </tr>
    </thead>
    <tbody>
      <?php
        $count = 1;
        while($row = mysqli_fetch_array($data)) {
      ?>
      <tr>
          <td><?php echo $count; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["username"]; ?></td>
          <td><?php echo $row["email"]; ?></td>
          <td>
            <a class="button is-link" href=<?php echo("./views/UpdateUser.php?id=".$row["id"]); ?>>Editar</a>
            <button class="button is-danger" onclick="deleteUser(<?php echo $row['id']; ?>, '<?php echo $row['name']; ?>' )">Eliminar</button>
          </td>
      </tr>
      <?php $count++; } ?>
    </tbody>
    </table>
  <script>
    function deleteUser(id, name) {
      if (confirm(`¿Estas seguro que querer eliminar ${name}?`)) 
        window.location = `./actions/delete.php?id=${id}`
    }
  </script>
  </div>
</div>