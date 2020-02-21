<!DOCTYPE html>
<?php require_once 'header.php'?>

<body>
  <header>
    <a href="../index.php"><img src="../image/back.png" alt="back_button"/></a>
  </header>
  <main id="button_enter">
		<div>
      <?php
        require_once 'login.php';
        require_once 'connection.php'?>
      <?php

      $name = $_GET["name"];
      $note = $_GET["note"];
      $status = $_GET["status"];
      $id = $_GET["id"];
      $query = "UPDATE tasks SET name='$name', description='$note', id_status='$status' WHERE id='$id';";
      $result = $conn->query($query);
      ?>
<h1>Задача с названием &laquo;<?php echo "$name";?>&raquo; изменена </h1>

		</div>
</main>
</body>

</html>
