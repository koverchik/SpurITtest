<!DOCTYPE html>
<?php
  require_once 'header.php';
  require_once 'login.php';
  require_once 'connection.php'?>

<body>

  <header>
    <a href="../index.php"><img src="../image/back.png" alt="back_button"/></a>
  </header>
  <main id="button_enter">
		<div>
<?php
$boby = $_POST["boby_comment"];
$id = $_POST["id"];
$query = "INSERT INTO comments(id, text) VALUES ('$id', '$boby');";
$result = $conn->query($query);
?>
<h1>Комментарий &laquo;<?php echo "$boby";?>&raquo; добавлен к задаче</h1>

  	</div>
  </main>
</body>

</html>
