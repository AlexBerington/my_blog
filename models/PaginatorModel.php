<?php

class PaginatorModel
{
    public $res;
    private $connect;
    public function __construct($db)
    {
        $this->connect = $db;
        $sql = <<<SQL
SELECT COUNT(*) FROM pages;
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