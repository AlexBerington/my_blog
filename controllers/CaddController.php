<?php

class CaddController
{
    function __construct()
    {
        $db_connect = new db();

        $text = $db_connect->escape($_POST['text']);
        $page_id = $db_connect->escape($_POST['page_id']);
        $user =  $db_connect->escape($_POST['user']);
        $db_connect->close();
        new CaddModel($text, $page_id, $user);


    }

}