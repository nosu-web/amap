<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Проверка авторизации */
require("includes/auth.inc.php");

if (isset($_POST["addSubmit"])) {
    $formError = "";

    /* Получаем данные из формы */
    $polygonDescription = $_POST["polygonDescription"];
    $polygonDensity = $_POST["polygonDensity"];
    $polygonPoints = $_POST["polygonPoints"];

    if (!empty($polygonDensity) && !empty($polygonPoints)) {
        echo "$polygonDescription $polygonDensity $polygonPoints";
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
</body>

</html>
<?php
/* Закрываем соединение с БД */
$mysqli->close();
