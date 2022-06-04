<?php
require_once"db.php";
class CProducts
{
    public static function Products($conn, $amount)
    {
        $Product = $conn->query("SELECT * FROM `Products` WHERE `id`>0 LIMIT $amount") or die(" Error: " . $conn->errorInfo());
        return $Product->fetchAll();
    }

    public static function ProductsActual($Pr_act)
    {
        function myCmp($a, $b)
        {
            if ($a["DATE_CREATE"] == $b["DATE_CREATE"]) return 0;
            return $a["DATE_CREATE"] > $b["DATE_CREATE"] ? 1 : -1;
        }
        usort($Pr_act, "myCmp");
        return $Products_d=$Pr_act;

    }

    public static function QuantityAction($conn,$id,$qu)
    {
        if ($qu > 0) {
            $sql = $conn->query("UPDATE Products SET `PRODUCT_QUANTITY`=`PRODUCT_QUANTITY`+1 WHERE id='$id'");
            $res = $sql->fetch(PDO::FETCH_ASSOC);
        }
        elseif ($qu < 0) {
            $sql = $conn->query("UPDATE Products SET `PRODUCT_QUANTITY`=`PRODUCT_QUANTITY`-1 WHERE id='$id'");
            $res = $sql->fetch(PDO::FETCH_ASSOC);
        }
        else {echo "Что то не то";}
        return $res;
    }

    public static function HiddenAction($conn,$id,$pub)
    {
        $sql = $conn->query("UPDATE Products SET `pub`='$pub' WHERE id='$id'");
        $res = $sql->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}