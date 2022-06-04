<?php
require_once ("db.php");

//строковые данные должны быть в кодировке UTF-8
header('Content-type: text/html; charset=utf-8');

//строка пришла на сервер
$str = $_POST['a'];

//что-то делаем на сервере, преобразуем строку в верхний регистр
$str = strtoupper($str);

//отправляем обратно, помещаем строку в массив
$ara = array($str);

//кодируем массив в строку формата JSON
$str = json_encode($ara);

//возрващаем строку в формате JSON
echo $str;


if (!$conn) {
    die("Connection failed: ");
}
$id = $_GET['id'];
var_dump($id);
echo $id;
die;
$sql = "UPDATE Product SET `Pub`='0' WHERE id=$id";

if ($conn->query($sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ";
}