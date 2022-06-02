<?php

class CProducts
{
    public static function Products($conn, $amount)
    {
        $query = $conn->query("SELECT * FROM `Products` WHERE `id`>=1 LIMIT $amount") or die(" Error: " . $conn->errorInfo());
        /* $query = $conn->query("SELECT *,(STR_TO_DATE(`DATE_CREATE`, '%Y.%m.%d.') AS `tmp_date`) FROM `Products` WHERE (`id`>=1 LIMIT $amount) ORDER BY `DATE_CREATE` DESC") or die(" Error: " . $conn->errorInfo());*/
        return $Products = $query->fetchAll();
    }

    public static function ProductsActual()
    {
        $query = $conn->query("SELECT * FROM `Products` WHERE `id`>=1 LIMIT $amount") or die(" Error: " . $conn->errorInfo());
        /* $query = $conn->query("SELECT *,(STR_TO_DATE(`DATE_CREATE`, '%Y.%m.%d.') AS `tmp_date`) FROM `Products` WHERE (`id`>=1 LIMIT $amount) ORDER BY `DATE_CREATE` DESC") or die(" Error: " . $conn->errorInfo());*/
        return $Products = $query->fetchAll();
    }

    public static function QuantityAction($quanty_minus)
    {
        $minus=$POST['$quanty_minus'];
        var_dump($minus);
        die;

        $query = $conn->query("UPDATE Products SET PRODUCT_QUANTITY=? WHERE id=?");
        $stmt->prepare($query)->execute([$PRODUCT_QUANTITY,$id]) or die(" Error: " . $conn->errorInfo());
        return;

        /*  $dateAr = [];
  $dateAr[$row]=sort($Products_d[$row['DATE_CREATE']]);*/
        /*array_multisort($dateAr, SORT_STRING, $Products_d);*/
        /* var_dump($Products_d);
         die;*/

    }

    public static function HiddenAction($conn)
    {
        $sql = $conn->query("SELECT Products.*, (SELECT pub.title FROM pub WHERE pub.id=Products.pub) AS pub FROM Products");
        $res = $sql->fetch(PDO::FETCH_ASSOC);
        return $res;

    }
}