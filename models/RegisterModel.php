<?php

class RegisterModel
{
    private $connect;
    public function __construct( $login, $pwd, $email)
    {
        $this->connect = new db();
        $sql = <<<SQL
INSERT INTO users (username, pwd, email) VALUES ('$login','$pwd','$email');
SQL;

        $this->connect->conn->query($sql);
        $this->connect->close();
        header('location: /home');

    }

}