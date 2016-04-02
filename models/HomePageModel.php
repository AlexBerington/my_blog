<?php

class HomePageModel
{
    public $connect;
    public function __construct($db)
    {
     $this->connect = $db;
    }

    public function getAll($lim = ""){

        $sql = <<<SQL
        SELECT * FROM pages $lim;
SQL;

        $res = $this->connect->query($sql);
        return $res;
    }


    public function getActive($lim = ""){

        $sql = <<<SQL
        SELECT * FROM pages WHERE page_publish = 'Y' $lim;
SQL;

        $res = $this->connect->query($sql);
        return $res;
    }

}