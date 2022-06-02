<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'veditadb';
$tableName = 'Products';

$dsn = "mysql:host=$dbhost;dbname=$dbname";

$conn = new PDO ($dsn, $dbuser, $dbpass) or die  ('Error connecting to mysql');
$amount = 3;

function Products($conn,$amount)
{
    $query = $conn->query("SELECT * FROM `Products` WHERE `id`>=1 LIMIT $amount") or die(" Error: " . $conn->errorInfo());
   /* $query = $conn->query("SELECT *,(STR_TO_DATE(`DATE_CREATE`, '%Y.%m.%d.') AS `tmp_date`) FROM `Products` WHERE (`id`>=1 LIMIT $amount) ORDER BY `DATE_CREATE` DESC") or die(" Error: " . $conn->errorInfo());*/
    return $Products=$query->fetchAll();
}

/*var_dump($Products=Products($conn,$amount));
die;*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tables</title>
</head>
<body>

<?
echo "<tbody>";
$Products_d=Products($conn,$amount);

/*$date = $conn->query("SELECT * FROM `Products` ORDER BY id DESC");*/
/*$date = $Products->query("SELECT *,STR_TO_DATE(`DATE_CREATE`, '%Y.%m.%d.') AS `tmp_date` FROM `Products` ORDER BY `DATE_CREATE` DESC");*/
/*$Products_d=$date->fetchAll();*/

   foreach ($Products_d as $row=>$arr) {
 /*  $dateAr = [];
   $dateAr[$row]=sort($Products_d[$row['DATE_CREATE']]);*/
   /*array_multisort($dateAr, SORT_STRING, $Products_d);*/
  /* var_dump($Products_d);
   die;*/

        echo "<tr><td>" . $arr["id"]
            . "</td><td>" . $arr["PRODUCT_ID"]
            . "</td><td>" . $arr["PRODUCT_NAME"]
            . "</td><td>" . $arr["PRODUCT_PRICE"]
            . "</td><td>" . $arr["PRODUCT_ARTICLE"]
            . "</td><td>" . $arr["PRODUCT_QUANTITY"]
            . "</td><td>" . $arr["DATE_CREATE"]
            . "</td><td>" . "Cкрыть"
            . "</td></tr><br>";
    }
    echo "</tbody>";

?>

</body>
</html>
