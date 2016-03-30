<?php
require_once ('../../classes/db.php');
$db = new db();
$id = $_GET['id'];
$sql = <<<SQL
SELECT * FROM pages WHERE page_id = '$id' LIMIT 1;
SQL;

$db->query($sql);
$title = $db->data['page_title'];
$meta_d = $db->data['page_meta_d'];
$meta_k = $db->data['page_meta_k'];
$h1 = $db->data['page_h1'];
$s_desc = $db->data['page_s_desc'];
$content = $db->data['page_content'];
$publish = $db->data['page_publish'];
$date = $db->data['publish_date'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Cognitio- Панель управления</title>
</head>
<body>
<div class="menu">
    <ul>
        <li><a href="?temp=main">Главная</a></li>
        <li><a href="?temp=publications">Статьи</a></li>
        <li>Пользователи</li>
        <li>Настройки</li>
    </ul>
</div>
<div class="publish_form"> <form action="../update_publish.php" method="POST">
        <input type="text" value="<?=$id?>" name="id" hidden>
        <label>Название страницы</label><input type="text" name="title" value="<?=$title?>"></br>
        <label>META описание</label><input type="text" name="meta_d" value="<?=$meta_d?>"></br>
        <label>Название</label><input type="text" name="h1" value="<?=$h1?>"></br>
        <label>Описание</label><textarea name="s_content" cols="90" rows="6"><?=$s_desc?></textarea></br>
        <label>Полный текст</label><textarea name="content" cols="90" rows="15"><?=$content?></textarea></br>
        <label>Ключевые слова</label><input type="text" name="meta_k" value="<?=$meta_k?>"></br>
        <label>Опубликовать?</label><input type="text" name="publish" size="1" value="<?=$publish?>"></br>
        <label>Дата добавления</label><input type="text" name="date" size="1" value="<?=$date?>"></br>

        <input type="submit" value="Сохранить">
    </form></div>
</body>
</html>

