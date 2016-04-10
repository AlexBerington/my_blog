<?php

class RouterController
{
    function action_page($id)
    {
        new CounterController($id);
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
            'title' => 'Cognitio- Главная'
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
    function action_adminpanel(){
        new AdminPanelController();
    }
    function admin_publications()
    {

        $db = new db();
        echo view::render('admin_index', [
            'content' => view::render('admin_publications'),
            'dop_content' => new AdminPublications($db),
            'dop_content1' => '</tbody></table>'
        ]);
    }
    function admin_add_publish(){
        echo view::render('admin_index',[
            'content' =>  new PublishEdit()
        ]);
    }
    function admin_save_publish(){
        new AdminSavePublish($_POST);
    }
    function admin_update_publish($param){
        echo view::render('admin_index',[
            'content' => new AdminUpdatePublish($param)
        ]);
    }
    function admin_update_publish_sc(){;
        new AdminUpdatePublishModel($_POST);
        header('location: /admin/publications');
    }
    function admin_delete_publish($param){
        new DeletePubl($param);
    }
    function admin_config(){
        echo view::render('admin_index',[
            'content' => new AdminConfigController()
        ]);
    }
    function admin_saveconf1(){
        //Настройки базы данных
        new AdminSaveConf1($_POST);
    }

    function admin_saveconf2(){
        //настройки страницы
        new AdminSaveConf2($_POST);
    }

    function action_publ_today(){
        $db = new db();
        echo view::render('main',[
            'all_content' => new TodayPubl($db->conn),
            'userpanel' => new UserController(),
            'title' => 'Cognitio- Новое'
        ]);
    }
    function action_best(){
        $db = new db();
        echo view::render('main',[
            'all_content' => new BestPubl($db->conn),
            'userpanel' => new UserController(),
            'title' => 'Cognitio- Лучшее'
        ]);
    }

}