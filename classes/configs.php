<?php

class configs
{
    public static $db_host = "localhost";
    public static $db_user = "root";
    public static  $db_pwd = "107212155";
    public static $db_name = "blog";
    public static $post_per_page=3;
    public static function db_set_param($host,$user,$pass,$db){
        self::$db_host = $host;
        self::$db_user = $user;
        self::$db_pwd = $pass;
        self::$db_name = $db;
    }
    public static function postsOnPage($num){
        self::$post_per_page = $num;
    }


}