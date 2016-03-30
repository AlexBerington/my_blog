<?php
require_once ('../classes/db.php');
$db = new db();
$title = $_POST['title'];
$meta_d = $_POST['meta_d'];
$meta_k = $_POST['meta_k'];
$h1 = $_POST['h1'];
$s_desc = $_POST['s_content'];
$content = $_POST['content'];
$publish = $_POST['publish'];
$date = date("m.d.y");
$sql = <<<SQL
INSERT INTO pages(page_title,page_meta_d,page_meta_k,page_h1,page_s_desc,
page_content,page_publish,publish_date) VALUES ('$title','$meta_d','$meta_k','$h1','$s_desc','$content',
'$publish','$date');
SQL;
$db->conn->query($sql);
$db->close();

    header("location: index.php?temp=publications");


