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

  <form id="form" method="post" action="handlers/redact.php">
      <div>
        <label for="status">Статус</label><input list="status"  name="status" form="form-deal">
        <datalist id="status">
          <option value="1" <?php if($id_status==1){echo"selected";};?>>TODO</option>
          <option value="2" <?php if($id_status==2){echo"selected";};?>>DOING</option>
          <option value="3" <?php if($id_status==3){echo"selected";};?>>DONE</option>
      </datalist>
    </div>
    <div>
       <label for="name">Название</label><input type="text" name="name" value="<?php printf("$name");?>" required placeholder="" >
    </div>
    <div>
        <label for="note">Описание</label><input type="text" name="note" value="<?php printf("$description");?>" form="form-presentation" ></textarea><br>
    </div>

    <div>
      <input id="button-send" type=submit value="Изменить">
    </div>
    <div>
      <input id="button-send" type=submit value="Добавить комментарий">
    </div>
  </form>

  </body>

  </html>
