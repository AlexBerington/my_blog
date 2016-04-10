<?php

class AdminSavePublish
{
    public function __construct($params)
    {

        new AdminSavePublishModel($params);

        header('location: /admin/publications');
    }
}