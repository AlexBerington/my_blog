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

        } else {
            $this->result = view::render('loginform');
        }
        if ($this->username == 'Admin') {

           $this->result .= view::render('adminbutton');

        }
    }
    public function __toString()
    {
        return $this->result;
    }

}