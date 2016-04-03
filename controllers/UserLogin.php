<?php

class UserLogin
{
    private $login;
    private $pass;
    public function __construct($pass, $login)
    {

        if ($login && $pass) {
            $db = new db();
            $this->login = $db->escape($login);
            $this->pass = new password($db->escape($pass));
        }else{
            header('location: /home');
        }
        $model = new LoginModel($this->login, $this->pass, $db);
    }
}