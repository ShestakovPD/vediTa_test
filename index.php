<?php

require "CProducts.php";
$amount = 3;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tables</title>
    <link type="text/css" rel="stylesheet" href="css/demo.css">
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/pub.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?
echo "<tbody>";
echo "<table><tr><td align='center'>ID</td><td align='center'>ID_PR</td><td align='center'>NAME</td><td align='center'>PRICE</td><td align='center'>ARTICLE</td><td align='center'>DATE_CREATE</td><td align='center'>QUANTITY</td><td align='center'>Value</td><td align='center'>Публикация</td></tr>";

?>
<pre><?
    $Products_q = CProducts::Products($conn, $amount);
    $Products_d = CProducts::ProductsActual($Products_q);

    foreach ($Products_d as $row => $arr) {

        if ($arr["pub"] == 1) {
            echo "<tr><td align='center'>" . $arr["id"]
                . "</td><td align='center'>" . $arr["PRODUCT_ID"]
                . "</td><td align='center'>" . $arr["PRODUCT_NAME"]
                . "</td><td align='center'>" . $arr["PRODUCT_PRICE"]
                . "</td><td align='center'>" . $arr["PRODUCT_ARTICLE"]
                . "</td><td align='center'>" . date("Y-m-d", $arr["DATE_CREATE"])
                . "</td>" . "<td align='center'>" . $arr["PRODUCT_QUANTITY"] . "</td>"
            ?>
            <td align='center'>
                    <form method='post' action='quanty_minus.php'>
                    <input type='hidden' id='minus_id' name='quanty_minus' value='-1' onclick=''>
                    <input type='hidden' id='id_m' name='id' value="<? echo $arr["id"] ?>" onclick=''>
                    <div class='counter'><button class='counter__minus'>−</button></div>
                    </form>

                    <form method='post' action='quanty_plus.php'>
                    <input type='hidden' id='plus_id' name='quanty_plus' value='1' onclick=''>
                    <input type='hidden' id='id_p' name='id' value="<? echo $arr["id"] ?>" onclick=''>
                    <button class='counter__plus'> + </button>
                    </form>
                    </td>

            <td align='center'>
            <form method='post' action='hidden.php'>
                    <input type='hidden' id="pub" name='pub' value="1" onclick=''>
                    <input type='hidden' id="id_h" name='id' value="<? echo $arr["id"] ?>" onclick=''>
                    <div class='counter'><button class='counter__minus'>Публикация</button></div> </form>

            <?
            "</td></tr><br>";

        } elseif ($arr["pub"] == 0) {
            echo "<tr><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td><td align='center'>" . ''
                . "</td>"
            ?>
            <td align='center'>
                    <form method='post' action='hidden.php'>
                    <input type='hidden' id="pub" name='pub' value="0" onclick=''>
                    <input type='hidden' id="id_h" name='id' value="<? echo $arr["id"] ?>" onclick=''>
                    <div class='counter'><button class='counter__minus'>Публикация</button></div> </form>
                    </td>
            <?

            "</td></tr><br>";
        }

    }
    echo "</tbody>";
    ?>
</body>
</html>


