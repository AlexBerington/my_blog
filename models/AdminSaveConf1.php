<?php
class AdminSaveConf1
{
    //Настройки базы данных
    public function __construct($params)
    {
        if($this->check($params)){
            configs::$db_host = $params['host'];
            configs::$db_user = $params['user'];
            configs::$db_pwd = $params['pwd'];
            configs::$db_name = $params['db'];
        }
        header('location: /admin/config');

    }

    private function check($params){
        if(isset($params['host'])&&
           isset($params['user'])&&
           isset($params['pwd'])&&
           isset($params['db'])){
            return true;}else{
            return false;
        }
    }
}