<!DOCTYPE HTML>
<html>
  <?php include("./includes/head.php"); ?>
  <title>Home</title>
<body>
  <?php 
    if (file_exists("./includes/heroPrimary.php"))
      include("./includes/heroPrimary.php");
    else header('location: ../index.php') 
    ?>
  <?php
    $data = $database->getAllUsers();
    include("./includes/tableWithUsers.php");     
  ?>
  <?php require("./includes/footer.php"); ?>
</body>
</html>