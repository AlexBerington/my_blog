<?php
class LogoutController
{
    public function __construct()
    {

        session_start();
        session::delete('user');
        session::destroy();
        header('location: ../home');
    }
}