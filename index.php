<?php

require "db.php";
require "CProducts.php";

$amount = 3;

/*var_dump($Products=CProducts::Products($conn,$amount));
die;*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tables</title>
    <link type="text/css" rel="stylesheet" href="css/demo.css">
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/pub.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?
$qu=0;
echo "<tbody>";
echo "<table><tr><td align='center'>ID</td><td align='center'>ID_PR</td><td align='center'>NAME</td><td align='center'>PRICE</td><td align='center'>ARTICLE</td><td align='center'>QUANTITY</td><td align='center'>Value</td><td align='center'>DATE_CREATE</td></tr>";
$Products_d=CProducts::Products($conn,$amount);

/*$date = $conn->query("SELECT * FROM `Products` ORDER BY id DESC");*/
/*$date = $Products->query("SELECT *,STR_TO_DATE(`DATE_CREATE`, '%Y.%m.%d.') AS `tmp_date` FROM `Products` ORDER BY `DATE_CREATE` DESC");*/
/*$Products_d=$date->fetchAll();*/

   foreach ($Products_d as $row=>$arr) {


        echo "<tr><td align='center'>" . $arr["id"]
            . "</td><td align='center'>" . $arr["PRODUCT_ID"]
            . "</td><td align='center'>" . $arr["PRODUCT_NAME"]
            . "</td><td align='center'>" . $arr["PRODUCT_PRICE"]
            . "</td><td align='center'>" . $arr["PRODUCT_ARTICLE"]
            . "</td><td align='center'>" . $qa=$arr["PRODUCT_QUANTITY"]
            . "</td><td align='center'>" .

            "<form method='post' action='CProducts.php'>".
            "<input type='hidden' name='quanty_minus' value='1'>".
            "<div class='counter'>"."<button class='counter__minus'>"."−"."</button>".

            "<input class='counter__input' type='text' readonly value='0'>".
            "<button class='counter__plus'>"."+"."</button>".
            "</div>"
            . "</td><td align='center'>" . $arr["DATE_CREATE"]
            . "</td><td align='center'>" .
            $res=CProducts::HiddenAction($conn);
            do{
            $i++;
            echo"<td><div class='pub' title='".$res['id']."'>".$res['pub']."</div></td>";
            }
            while(
                    /* @$res = mysql_fetch_array($sql)*/
                $res = CProducts::HiddenAction($conn)->fetch(PDO::FETCH_ASSOC)
            );
            "</td></tr><br>";
    }
    echo "</tbody>";

?>

</body>
</html>
