<?php
$url_id = $_GET['id'];


$all_content = '';

$sql = <<<SQL
SELECT * FROM comments WHERE page_id = '$url_id';
SQL;
$res = $db->conn->query($sql);
/*while($data = $res->fetch_row()) {
    $u_name = $data[3];
    $u_com = $data[1];
    $all_content .= '<div class="col-sm-offset-1"><p>Имя: ' . $u_name . '</p><p>' . $u_com . '</p></div></div>';
}*/




$db->close();
