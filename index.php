<!DOCTYPE html>
<?php require_once 'header.php'?>
<?php require_once 'handlers/login.php'?>
<?php require_once 'handlers/connection.php'?>
  <body>
  <header>
		<div class="customers">
			<h1><a href="create.php">Создать задачу</a></h1>
		</div>
  </header>
  <main id="button_enter">
    <div>
      <h2>TODO step 1</h2>
       <ul>
  <?php
          $query = "SELECT tasks.name, tasks.description, tasks.id  FROM tasks WHERE tasks.id_status='1';";
          $result = $conn->query($query);
          while ($obj = $result->fetch_object()) {
          printf ("<li class=\"create\"> <a href=\"redact.php?id=$obj->id\"> $obj->name</a> <div>$obj->description</div><div class=\"comment\">	<img src=\"image/comment.png\"/>
            <p>1</p></div></li>");
          }?>
    </ul>
</div>

				<div>
					<h2>DOING step 2</h2>
					<ul>
            <?php   $query = "SELECT tasks.name, tasks.description, tasks.id  FROM tasks WHERE tasks.id_status='2';";
                    $result = $conn->query($query);
                    while ($obj = $result->fetch_object()) {
                    printf ("<li class=\"in_work\"> <a href=\"redact.php?id=$obj->id\"> $obj->name</a> <div>$obj->description</div><div class=\"comment\">	<img src=\"image/comment.png\"/>
                      <p>1</p></div></li>");}?>

					</ul>
				</div>
				<div>
					<h2>DONE step 3</h2>
					<ul>
            <?php   $query = "SELECT tasks.name, tasks.description, tasks.id  FROM tasks WHERE tasks.id_status='3';";
                    $result = $conn->query($query);
                    while ($obj = $result->fetch_object()) {
                    printf ("<li class=\"delivery\"> <a href=\"redact.php?id=$obj->id\"> $obj->name</a> <div>$obj->description</div><div class=\"comment\">	<img src=\"image/comment.png\"/>
                      <p>1</p></div></li>");}?>

					</ul>
				</div>
      </main>
    </body >
    </html>
