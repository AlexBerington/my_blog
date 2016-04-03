<?php

class RouterController
{
    function action_page($id)
    {
        $page_id = $id;
        $meta = new PageController($page_id);
        echo view::render('main',[
            'all_content' => $meta,
            'userpanel' => new UserController(),
            'title' => $meta->title,
            'page_description' => $meta->page_desc,
            'page_keywords' => $meta->page_k
        ]);

    }

    function action_registration ()
    {
        echo view::render('main',[
           'all_content' => new Register(),
            'title' => 'Регистрация'
        ]);
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
            'userpanel' => new UserController(),
            'title' => 'Cognitio'
        ]);
    }
    function action_login(){
        $pass = $_POST['pass'];
        $login = $_POST['username'];
        new UserLogin($pass,$login);
    }
    function action_logout(){
    new LogoutController();
    }

    function action_register_complete(){
        new RegisterController();

    }
    function action_add_comment(){
        new CaddController();
    }


}