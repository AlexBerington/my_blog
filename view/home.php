<?php
$page = $_GET['page'];

//
$res = $db->getActive();
$all_content = '';
$title = "Cognitio - Главная страница";
$num = configs::$post_per_page;
// Извлекаем из URL текущую страницу
$page = $_GET['page'];
// Определяем общее число сообщений в базе данных
$db->query("SELECT COUNT(*) FROM pages");

$posts = $db->data['COUNT(*)'];

// Находим общее число страниц
$total = intval(($posts - 1) / $num) + 1;
// Определяем начало сообщений для текущей страницы
$page = intval($page);
// Если значение $page меньше единицы или отрицательно
// переходим на первую страницу
// А если слишком большое, то переходим на последнюю
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
// Вычисляем начиная к какого номера
// следует выводить сообщения
$start = $page * $num - $num;
// Выбираем $num сообщений начиная с номера $start
$lim = "LIMIT ".$start.",".$num;
$res = $db->getActive($lim);
while( $data = $res->fetch_row()) {
    $id = $data[0];
    $h1 = $data[4];
    $s_content = $data[5];
    $date = $data[8];

    $all_content .= '<div class="content"> <div class="panel panel-default">
                <div class="panel-heading">
               <h1> <a class="pages_h1" href="?temp=page&id='.$id.'"> '.$h1.'</a></h1></div>
                <div class="panel-body">
                <p>'.$s_content.'<a href="?temp=page&id='.$id.'">Читать дальше</a></p>
                </div><div class="panel-footer"><p id="publish_date">Дата публикации: '.$date.'</p>
                </div>
                </div></div>';
}
if ($page != 1) $pervpage = '<a class="btn btn-success" href= /?temp=home&page='.($page - 1).'>Назад</a> ';

if ($page != $total) $nextpage = '<a class="btn btn-success" href= /?temp=home&page='.($page + 1).'>Дальше</a>';



$all_content .= "<div class='paginator'>$pervpage $nextpage</div> ";

?>

