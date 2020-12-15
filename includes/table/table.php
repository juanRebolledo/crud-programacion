<table class="table" style="width:100%;">
  <thead>
    <tr>
      <?php foreach($arrHeaders as $value) echo("<td><strong>$value</strong></td>"); ?>
    </tr>
    </thead>
    <tbody>
      <?php
        $count = 1;
        while($row = mysqli_fetch_array($data)) {
      ?>
      <tr>
        <td><?php echo $count; ?></td>
        <?php foreach($arrData as $valueD) echo("<td>$row[$valueD]</td>"); ?>
        <td>
          <a class="button is-link" href=<?php echo("./views/UpdateUser.php?id=".$row["id"]); ?>>Editar</a>
          <button class="button is-danger" onclick="deleteUser(<?php echo $row['id']; ?>, '<?php echo $row['name']; ?>' )">Eliminar</button>
        </td>
      </tr>
    <?php $count++; } ?>
  </tbody>
</table>