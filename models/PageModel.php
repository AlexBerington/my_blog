<?php


class PageModel
{
    private $result;
    private $connect;
    public function __construct($url_id, $db_connect)
    {
        $sql = <<<SQL
SELECT * FROM pages WHERE page_id = '$url_id' AND page_publish = 'Y' LIMIT 1;
SQL;
        $this->connect = $db_connect;
        $this->connect->query($sql);

    }
}