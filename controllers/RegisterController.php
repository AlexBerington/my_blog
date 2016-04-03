<?php


class RegisterController
{
    public function __construct()
    {
        $reg = new registration($_POST);
        if ($reg->validation()) {
            $dbs = new db;
            $email = $dbs->escape($reg->getEmail());
            $login = $dbs->escape($reg->getLogin());
            $pwd = new password($reg->getPwd());
            new RegisterModel($login, $pwd, $email);
            $dbs->close();

        }

    }
}