<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Проверка авторизации */
require("includes/auth.inc.php");
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <?php require("templates/styles.tpl.php"); ?>
    <link rel="stylesheet" href="vendor/leaflet-1.7.1/dist/leaflet.css">

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
    <script src="vendor/leaflet-1.7.1/dist/leaflet.js"></script>
  
  </body>
</html>
<?php
/* Закрываем соединение с БД */
$mysqli->close();
