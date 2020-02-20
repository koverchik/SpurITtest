<!DOCTYPE html>
<?php require_once '../header.php'?>
<body>
  <header>
    <a href="../index.php"><img src="../image/back.png" alt="back_button"/></a>
		<div class="customers">
      <?php require_once 'connection.php'?>
      <?php
      $name = $_GET["name"];
      $note = $_GET["note"];
      $status = $_GET["status"];

      require_once 'login.php';
      $conn = new mysqli($hn, $un, $pw, $db);
      if ($conn->connect_error) die($conn->connect_error);

      $query = "INSERT INTO tasks(name, description, id_status) VALUES ('$name', '$note', '$status');";
      $result = $conn->query($query);

      ?>
			<h1>Задача с названием <?php echo "$name";?> создана </h1>
		</div>


  </header>

</body>

</html>
