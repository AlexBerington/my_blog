<?php
class AdminSaveConf2
{
    public function __construct($params)
    {
        configs::$post_per_page  = $params['posts'];
        header('location: /admin/config');
    }
}