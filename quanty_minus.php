<?php
require "CProducts.php";
require_once"db.php";

$id=$_POST['id'];

CProducts::QuantityAction($conn, $id, -1);

header ('Location: index.php');