<?php
$db = new db();
$res = $db->getAll();
$content = "<a href='?temp=add_publish_form'><img src='assets/images/add.png' width='5%'>Добавить</a>
                   <table class='a_publ'><tr>
                   <td>ID</td>
                   <td>Название</td>
                   <td>Дата публикации</td>
                   <td>Активна</td>
                   <td>Редактировать</td>
                   <td>Удалить</td>
</tr>";
while($data = $res->fetch_row()){
    $id = $data[0];
    $h1 = $data[4];
    $date = $data[8];
    $publish = $data[7];
    $content .= '
        <tr>
        <td>'.$id.'</td>
        <td>'.$h1.'</td>
        <td>'.$date.'</td>
        <td>'.$publish.'</td>
        <td><a href="view/update_publish_form.php?id='.$id.'"><img src="assets/images/config.png" ></a></td>
        <td><a href="delete_publish.php?id='.$id.'"><img src="assets/images/delete.png" ></a></td>
        </tr>';
}
$content .= "</table>";