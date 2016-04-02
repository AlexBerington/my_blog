<?php
require_once('../classes/db.php');
$db = new db();
$id = $_GET['id'];
$sql = <<<SQL
DELETE FROM pages WHERE page_id = '$id' LIMIT 1;
SQL;

$db->conn->query($sql);
$db->close();
header("location: index.php?temp=publications");
