<?php
class BestPublModel
{

    public $connect;
    public function __construct($db)
    {
        $this->connect = $db;
    }
    public function getActive(){
        $sql = <<<SQL
        SELECT * FROM pages WHERE page_publish = 'Y' ORDER BY counter DESC LIMIT 3;
SQL;
        $res = $this->connect->query($sql);
        return $res;
    }
}