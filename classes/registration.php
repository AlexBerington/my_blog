<?php
class registration
{
    private $email;
    private $username;
    private $pwd;
    private $pwd_c;

    /**
     * registration constructor.
     */
    function __construct(array $data)
    {
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->username = isset($data['login']) ? $data['login'] : null;
        $this->pwd = isset($data['pwd']) ? $data['pwd'] : null;
        $this->pwd_c = isset($data['c_pwd']) ? $data['c_pwd'] : null;
    }
    function pwd_check(){
        return $this->pwd == $this->pwd_c;
    }
    function validation(){
        return ($this->email)&&($this->username)&&($this->pwd)&&($this->pwd_c)&& $this->pwd_check();
    }
    function getEmail(){
        return $this->email;
    }
    function getLogin(){
        return $this->username;
    }
    function getPwd(){
        return $this->pwd;
    }

}