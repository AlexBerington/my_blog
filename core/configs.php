<?php

class configs
{
    private static $instance = null;
    public static $db_host = "localhost";
    public static $db_user = "root";
    public static  $db_pwd = "107212155";
    public static $db_name = "blog";
    public static $post_per_page = 6;
    private function __construct(){}
    private function __clone(){}
    public static function getInstance(){
        if(self::$instance = null) self::$instance = new self();
        return self::$instance;
    }

//    private static $settings = array();
//    public static function get($key){
//    return isset(self::$settings[$key])? self::$settings[$key] : null;
//}
//
//    public static function set($key, $value){
//        self::$settings[$key] = $value;
//    }

}