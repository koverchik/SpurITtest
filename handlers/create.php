<!DOCTYPE html>
<?php require_once 'header.php'?>
<body>
<header>
	<a href="../index.php"><img src="../image/back.png" alt="back_button"/></a>
</header>
		<div>
      <?php
        require_once 'login.php';
        require_once 'connection.php'?>

      <?php

      $name = $_GET["name"];
      $note = $_GET["note"];
      $status = $_GET["status"];
			if(empty($status)){
				$status = 1;
			}
      $query = "INSERT INTO tasks(name, description, id_status) VALUES ('$name', '$note', '$status');";
      $result = $conn->query($query);


      ?>
			<h1>Задача с названием &laquo;<?php echo "$name";?>&raquo; создана </h1>

		</div>




</body>

</html>
