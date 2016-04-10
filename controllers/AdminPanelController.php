<?php

class AdminPanelController
{
    public function __construct()
    {

        if ($_SESSION['user'] === 'Admin') {


           echo view::render('admin_index',[
           'content' => new AdminMainPage()
           ]);


        } else {
            header('location: /');
        }


    }
}