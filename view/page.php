<?php
$url_id = $_GET['id'];
$sql = <<<SQL
SELECT * FROM pages WHERE page_id = '$url_id' AND page_publish = 'Y' LIMIT 1;
SQL;
$db = new db();
$db->query($sql);

$title = $db->data['page_title'];
$page_description = $db->data['page_meta_d'];
$page_keywords = $db->data['page_meta_k'];
$h1 = $db->data['page_h1'];
$s_content = $db->data['page_s_desc'];
$content = $db->data['page_content'];
$date = $db->data['publish_date'];

$all_content = '<div class="content">
                <div class="panel-default">
                <div class="panel-heading">
                <h1>'.$h1.'</h1>
                </div>
                <div class="panel-body">
                <p>'.$content.'</p></div><div class="panel-footer"><p id="publish_date" >Дата публикации:  '.$date.'</a></p></div>
                </div></div></div><div class="comments">';

$sql = <<<SQL
SELECT * FROM comments WHERE page_id = '$url_id';
SQL;
$res = $db->conn->query($sql);
while($data = $res->fetch_row()) {
    $u_name = $data[3];
    $u_com = $data[1];
    $all_content .= '<div class="col-sm-offset-1"><p>Имя: ' . $u_name . '</p><p>' . $u_com . '</p></div></div>';
}
$all_content .= '</div><div class="comments_add"><form role="form" class="form-horizontal" action="add_comment.php" method="POST">
<div class="form-group">
<div class="col-xs-offset-1 col-sm-offset-3">
<label form="text">Комментировать:</label></br><textarea name="text" rows="4" cols="40" id="text" ></textarea></div></div>
<input type="hidden" name="page_id" value="'.$url_id.'">
<input type="hidden" name="user" value="'.session::get("user").'">
<div class="form-group">
<div class="col-xs-offset-1 col-sm-offset-3">
<input class="btn btn-success" type="submit" value="Отправить"></div></div>
  </form>
  </div>';




$db->close();
