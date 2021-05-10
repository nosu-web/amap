<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Проверка авторизации */
require("includes/auth.inc.php");

/* Если нажата кнопка войти */
if(isset($_POST["addSubmit"]))
{
  $name = $_POST["name"];
  $description = $_POST["description"];
}
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <?php require("templates/styles.tpl.php"); ?>
    <title>aMap</title>
  </head>
  <body>
    <!-- HEADER -->
    <?php require("templates/header.tpl.php"); ?>
    <main class="container-fluid">
      <!-- PAGE -->
      <?php require("templates/add.tpl.php"); ?>
    </main>
    <!-- JAVASCRIPT -->
    <?php require("templates/scripts.tpl.php"); ?>
  </body>
</html>
<?php
/* Закрываем соединение с БД */
$mysqli->close();
