<?php
class UserController
{
    private $username;
    private $result;
    private $adminbuton;
    public function __construct()
    {

        if (session::has('user')) {
            $this->username = session::get('user');

            $this->result = view::render('userpanel', [
                'username' => $this->username
            ]);
            if ($this->username == 'Admin') {

                $this->result .= view::render('adminbutton');

            }

        } else {
            $this->result = view::render('loginform');
        }

    }
    public function __toString()
    {
        return $this->result;
    }

}