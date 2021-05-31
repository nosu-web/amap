<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Проверка авторизации */
require("includes/auth.inc.php");

/* Получаем статусы из таблицы statuses и формируем options для select */
$statusOptions = "";
$result = $mysqli->query("SELECT * FROM statuses");
while($row = $result->fetch_assoc()){
  $statusId = $row["id"];
  $statusName = $row["name"];
  $statusOptions .= "<option value=\"$statusId\">$statusName</option>";
}

if (isset($_POST["addSubmit"])) {
    $formError = "";

    /* Получаем данные из формы и экранирует специальные символы в строке */
    $polygonDescription = $mysqli->real_escape_string($_POST["polygonDescription"]);
    $polygonPoints = $mysqli->real_escape_string($_POST["polygonPoints"]);
    $polygonDensity = $mysqli->real_escape_string($_POST["polygonDensity"]);
    $polygonStatus = $mysqli->real_escape_string($_POST["polygonStatus"]);

    $polygonJS = "";
    if (!empty($polygonDensity) && !empty($polygonPoints)) {
        $result = $mysqli->query("INSERT INTO `polygons`(`description`, `points`, `density`, `status_id`) VALUES ('$polygonDescription','$polygonPoints','$polygonDensity','$polygonStatus')");
        if($result)
          header("Location: index.php");
        else
          $formError = "Ошибка добавления участка в БД";
      } else
        $formError = "Добавьте участок на карту и выберите плотность кустов";

    if (!empty($formError))
        $formError = '<div class="alert alert-danger" role="alert">' . $formError . '</div>';
}
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <?php require("templates/styles.tpl.php"); ?>
    <link rel="stylesheet" href="vendor/leaflet-1.7.1/dist/leaflet.css">

    <title><?= SITE_NAME ?></title>
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
    <script src="vendor/leaflet.FreeDraw-2.13.4/dist/leaflet-freedraw.iife.js"></script>
    <script src="assets/js/map_draw.js"></script>
    <?= $polygonJS ?>
</body>

</html>
<?php
/* Закрываем соединение с БД */
$mysqli->close();
