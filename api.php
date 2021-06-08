<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");


if(isset($_GET["density"]))
{
    $density = $_GET["density"];
    $sql = "SELECT * FROM polygons, statuses WHERE polygons.status_id=statuses.id AND polygons.density=$density";
}
else
    $sql = "SELECT * FROM polygons, statuses WHERE polygons.status_id=statuses.id";

   
    
/* Получаем статусы из таблицы statuses и формируем options для select */
$statusOptions = "";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()){
    $polygonDescription = $row["description"];
    $polygonPoints = $row["points"];
    $polygonDensity = $row["density"];
    $polygonStatusID = $row["status_id"];
    $polygonStatus = $row["name"];
    $polygonCreated = $row["created"];

    $feautureObjects[] = 
    array(
        "type" => "Feature",
        "properties" => array(
            "description" => $polygonDescription,
            "density" => $polygonDensity,
            "statusID" => $polygonStatusID,
            "status" => $polygonStatus,
            "created" => $polygonCreated
        ),
        "geometry" => array(
            "type" => "Polygon",
            "coordinates" => json_decode($polygonPoints)
        )
    );
}

header('Content-Type: application/json');
echo json_encode($feautureObjects);