<?php

class DeletePubl
{
    public function __construct($param)
    {
        if(session::get('user')=='Admin'){
            new DeletePublModel($param);
            header('location: /admin/publications');
        }
    }
}