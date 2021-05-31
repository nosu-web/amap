<?php
/* Настройки сайта */
require("../config/common.php");

/* Подключение к БД */
require("../includes/mysqli.inc.php");

$query = file_get_contents("amap.sql");

$result = $mysqli->multi_query($query);

if ($result)
    header("location: ../index.php");
else
    echo "Ошибка импорта БД";
