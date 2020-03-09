<?php require_once 'login.php'?>
<?php require_once 'connection.php'?>
<?php

$id = $_POST['id_notes'];
 $query = "DELETE FROM tasks WHERE id='$id'";
 $result = $conn->query($query);
 ?>
