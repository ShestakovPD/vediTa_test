<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'veditadb';
$tableName = 'Products';

$dsn = "mysql:host=$dbhost;dbname=$dbname";

$conn = new PDO ($dsn, $dbuser, $dbpass) or die  ('Error connecting to mysql');