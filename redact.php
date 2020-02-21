<!DOCTYPE html>
<?php require_once 'header.php'?>
<?php require_once 'handlers/login.php'?>
<?php require_once 'handlers/connection.php'?>
<body>

<a href="index.php"><img src="image/back.png" alt="back_button"/></a>
<h1>Редактировать</h1>


<?php
$id = $_GET["id"];
$query = "SELECT name, description, id_status FROM tasks WHERE tasks.id='$id';";
$result = $conn->query($query);
    while ($obj = $result->fetch_object()) {
          $name = $obj->name;
          $description = $obj->description;
          $id_status = $obj->id_status;

        }?>

  <form id="form" method="get" action="handlers/redact.php">
      <div>
        <label for="status">Статус</label><input list="status" name="status" form="form">
        <datalist id="status">
          <option value="1" <?php if($id_status==1){echo"selected";};?>>TODO</option>
          <option value="2" <?php if($id_status==2){echo"selected";};?>>DOING</option>
          <option value="3" <?php if($id_status==3){echo"selected";};?>>DONE</option>
      </datalist>
    </div>
    <div>
       <label for="name">Название</label><input type="text" name="name" form="form" value="<?php printf("$name");?>" required >
    </div>
    <div>
        <label for="note">Описание</label><input type="text" name="note" value="<?php printf("$description");?>" form="form" ></textarea><br>
    </div>
     <input type="hidden" name="id" value="<?php printf("$id");?>">
    <div>
      <input id="button-send" type=submit value="Изменить">
    </div>

  </form>


  <form method="post" action="handlers/comment.php" id="form">
    <div>
       <label for="boby_comment">Новый комментарий</label>
       <input type="text" name="boby_comment" required>
    </div>

    <input type="hidden" name="id" value="<?php printf("$id");?>">

    <div class="comment">
      <img src="image/comment.png" alt="comment"/>
      <input id="button-send" type=submit value="Добавить комментарий">
    </div>
  </form>




  </body>

  </html>
