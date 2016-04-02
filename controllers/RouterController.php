<?php

class RouterController
{
    function action_page(){

    }

    function action_registration ()
    {
        print 'test';
    }




    function action_home ($params)
    {
        $page = intval($params);
        if(!$page){
            $page = 1;
        }

        $db = new db();
        echo view::render('main',[
            'all_content' => new HomePageController($page,$db->conn),
            'pagination' => new PaginatorController($page,$db->conn),
            'userpanel' => new UserController()
        ]);
    }


}