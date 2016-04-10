<?php
class TodayPublModel
{
    public $connect;
    public function __construct($db)
    {
        $this->connect = $db;
    }
    public function getActive($lim = ""){
        $date = date("d.m.y");
        $sql = <<<SQL
        SELECT * FROM pages WHERE page_publish = 'Y' AND publish_date ='$date' $lim;
SQL;

        $res = $this->connect->query($sql);
        return $res;
    }

}