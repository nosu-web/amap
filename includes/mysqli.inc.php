<?php
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/* проверка соединения c БД */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}