<?php

class LoginModel
{
    private $login;
    private $pass;
    private $connect;
    public function __construct($login, $pass, $connect)
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->connect = $connect;

        $sql = <<<SQL
    SELECT username,pwd FROM users WHERE username = '$login' AND pwd = '$pass';
SQL;
        $this->connect->query($sql);
        if($this->connect->data['username']&&$this->connect->data['pwd']){
            $user = $this->connect->data['username'];
            session::set('user',$user);
            header('location: /home');
        }else{
            header('location: /home');
        }

    }

}