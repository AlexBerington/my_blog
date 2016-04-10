<?php

class CommentsModel
{
    private $connect;
    private $url;
//    public function __construct($db, $url_id)
//    {
//        $this->url = $url_id;
//        $this->connect = $db;
//
//    }
    public function gerComments($db, $url_id){
        $this->url = $url_id;
        $this->connect = $db;
        $sql = <<<SQL
SELECT * FROM comments WHERE page_id = '$this->url';
SQL;
        $res = $this->connect->query($sql);

        return $res;
    }

}
