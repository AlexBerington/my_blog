<?php
require_once ('classes/db.php');
$db = new db();
$text = $db->escape($_POST['text']);
$page_id = $db->escape($_POST['page_id']);
$user =  $db->escape($_POST['user']);

$sql = <<<SQL
INSERT INTO comments (text, page_id, user) VALUES ('$text','$page_id','$user');
SQL;
$db->conn->query($sql);
header("location: index.php?temp=page&id=$page_id");
