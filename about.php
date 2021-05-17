<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Стартуем сессию */
session_start();
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <?php require("templates/styles.tpl.php"); ?>

    <title><?=SITE_NAME?></title>
  </head>
  <body>
    <!-- HEADER -->
    <?php require("templates/header.tpl.php"); ?>
    <main class="container-fluid">
      <!-- PAGE -->
      <?php require("templates/about.tpl.php"); ?>
    </main>
    <!-- JAVASCRIPT -->
    <?php require("templates/scripts.tpl.php"); ?>
  
  </body>
</html>
<?php
/* Закрываем соединение с БД */
$mysqli->close();
