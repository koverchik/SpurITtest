<!DOCTYPE html>

<?php require_once 'header.php'?>
<body>
  <a href="index.php"><img src="image/back.png" alt="back_button"/></a>
  <h1>Создать</h1>
    <form id="form" method="get" action="presentation.php">
      <div>
         <label for="name">Название</label><input type="text" name="name" required placeholder="">
      </div>
      <div>
          <label for="note">Описание</label><textarea type="text" size="256" name="note" form="form-presentation"></textarea><br>
      </div>
      <div>
          <label for="status">Статус</label><input list="status"  name="status" form="form-deal">
          <datalist id="status">
            <option>TODO</option>
            <option>DOING</option>
            <option>DONE</option>
        </datalist>
      </div>
      <div>
        <input id="button-send" type=submit value="Записать">
      </div>
    </form>
</body>

</html>
