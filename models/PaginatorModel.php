<?php

class PaginatorModel
{
    public $res;
    private $connect;
    private $date;
    public function __construct($db,$date)
    {
        $this->connect = $db;
        $sql = <<<SQL
SELECT COUNT(*) FROM pages WHERE page_publish = 'Y';
SQL;

        $data = $this->connect->query($sql);
        $res = $data->fetch_row();
        $this->res = $res[0];
    }

    public function __toString()
    {
        
        return $this->res;
    }
}