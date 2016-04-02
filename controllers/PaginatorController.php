<?php

class PaginatorController
{
    private $pervpage;
    private $nextpage;
    private $result;
    private $page;
    private $db_conn;
    public function __construct($page, $db)
    {
        $this->db_conn = $db;
        $this->page = $page;
        $all_pages = new PaginatorModel($this->db_conn);
        $posts = $all_pages->res;
        $num = configs::$post_per_page;

        $total = ($posts - 1) / $num + 1;
        $this->page = $page;




        if(empty($this->page) or $this->page < 0) $this->page = 1;
        if($this->page > $total) $this->page = $total;


        if ($this->page != 1){ $this->pervpage = '<a class="btn btn-success" href= /home/'.($this->page - 1).'>Назад</a> ';}
        if ($this->page != $total) $this->nextpage = '<a class="btn btn-success" href= /home/'.($this->page + 1).'>Дальше</a>';
       $this->result = view::render('pagination',[
           'pervpage' => $this->pervpage,
            'nextpage' => $this->nextpage
        ]);


    }
    public function __toString()
    {
        return $this->result;
    }
}