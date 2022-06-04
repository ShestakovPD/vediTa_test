<?php
require "CProducts.php";
require_once "db.php";

$id = $_POST['id'];
$pub = $_POST['pub'];

$pus = !$pub;
$pub = (int)$pus;

CProducts::HiddenAction($conn, $id, $pub);
header('Location: index.php');