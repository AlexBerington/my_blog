<?php
require_once('../classes/db.php');
$db =new db();
$id = $_POST['id'];
$title = $_POST['title'];
$meta_d = $_POST['meta_d'];
$meta_k = $_POST['meta_k'];
$h1 = $_POST['h1'];
$s_desc = $_POST['s_content'];
$content = $_POST['content'];
$publish = $_POST['publish'];
$date = date("m.d.y");
$sql = <<<SQL
UPDATE pages SET page_title = '$title', page_h1 = '$h1', page_meta_d = '$meta_d', page_meta_k = '$meta_k', page_s_desc = '$s_desc', page_content = '$content', page_publish = '$publish', publish_date = '$date' WHERE page_id = '$id' ;
SQL;

$db->conn->set_charset('utf8');
$db->conn->query($sql);

header('location: index.php?temp=publications');

