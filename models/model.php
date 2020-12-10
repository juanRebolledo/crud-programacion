<?php
class Database {
  private $data;
  private $db;
  private $instance;

  public function __construct() {
    $this->dataUsers = array();
    $this->db = mysqli_connect('localhost', 'root', '', 'prograweb') or die(mysqli_erro($mysqli));
  }

  public function close() {
    mysql_close($this->db);
  }

  public function createUser($email, $name, $password,  $username) {
    $sql = "INSERT INTO usuarios (id, name, email, username, password) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $username ."', '" . $password . "')";
    $dataInserted = $this->db->query($sql);

    if ($dataInserted) {
        return true;
    } else {
        return false;
    }
  }

  public function deleteUser($id) {
    $sql = "DELETE FROM usuarios WHERE id = '$id';";
    $isDeleted = $this->db->query($sql);
    
    return $isDeleted;
  }
  
  public function updateUser($email, $id, $name, $password, $username) {
    $sqlUpdate = "UPDATE usuarios SET email='$email', name='$name', username='$username', password='$password' WHERE id='$id'";
    $wasUpdated = $this->db->query($sqlUpdate);
    return $wasUpdated;
  }

  public function login($name, $email) {
    $sql = "SELECT id FROM usuarios WHERE name = '$name' and email = '$email'";
    $result = mysqli_query($this->db,$sql);
    $count = mysqli_num_rows($result);
    
    if($count == 1) {     
      return true;
    }else {
      return false;
    }
  }

  public function getUserWithID($id) {
    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    $user = mysqli_query($this->db, $sql);
    $userRow = mysqli_fetch_array($user);
    
    return array($userRow['email'], $userRow['name'], $userRow['password'], $userRow['username']);
  }

  public function getAllUsers() {
    $sql = "SELECT * FROM usuarios";
    $dataUsers = mysqli_query($this->db, $sql);

    return $dataUsers;
  }
}
?>