<?php


class session
{
    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }
    public static function has($key){
        return isset($_SESSION[$key]);
    }
    public static function get($key){
        $default = "Гость";
        if(self::has($key)){
            return $_SESSION[$key];
        }else{
            return $default;
        }
    }
    public static function delete($key){
        unset($_SESSION[$key]);
    }
    public static function destroy(){
        session_destroy();
    }


}