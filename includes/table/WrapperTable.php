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

  <div class="px-6 columns is-centered">  
    <?php 
      include_once('./includes/table/headersTable.php');
      list($arrData, $arrHeaders) = getHeadersUsers();
      include_once('./includes/table/table.php');
    ?>
  <script>
    function deleteUser(id, name) {
      if (confirm(`¿Estas seguro que querer eliminar ${name}?`)) 
        window.location = `./actions/delete.php?id=${id}`
    }
  </script>
  </div>
</div>