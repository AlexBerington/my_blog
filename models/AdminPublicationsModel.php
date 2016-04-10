<?php
class AdminPublicationsModel
{
    private $connect;
    public function __construct($db)
    {
        $this->connect = $db;

    }
    public function getPubls(){
        $sql = <<<SQL
SELECT * FROM pages;
SQL;
        $res = $this->connect->query($sql);

        return $res;
    }



}