<?php

/**

 */
class PageController
{
    private $res;
    private $return;
    public $title;
    public $page_desc;
    public $page_k;
    public function __construct($url_id)
    {
        $db_connect = new db();
        $this->res = new PageModel($url_id,$db_connect);
        $this->title = $db_connect->data['page_title'];
        $this->page_desc = $db_connect->data['page_meta_d'];
        $this->page_k = $db_connect->data['page_meta_k'];
        $this->return = view::render('page',[
        'h1' => $db_connect->data['page_h1'],
        'content' => $db_connect->data['page_content'],
        'date' => $db_connect->data['publish_date']
        ]);

    }
    public function __toString()
    {
       return $this->return;
    }

}