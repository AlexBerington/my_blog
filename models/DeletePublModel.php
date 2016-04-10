<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 05.04.16
 * Time: 18:19
 */
class DeletePublModel
{
    public function __construct($param)
    {
        $db = new db();
        $sql = <<<SQL
DELETE FROM pages WHERE page_id = '$param' LIMIT 1;
SQL;
        $db->conn->query($sql);
        $db->close();
    }
}