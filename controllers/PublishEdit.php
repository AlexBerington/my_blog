<?php
class PublishEdit
{
    private $result;
    public function __construct()
    {
        $this->result = view::render('publish_form',[
            'action' => '/admin/save_publish'
        ]);
    }
    public function __toString()
    {
        return $this->result;
    }
}