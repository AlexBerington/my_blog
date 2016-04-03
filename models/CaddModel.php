<?php

class CaddModel
{
    public function __construct($text, $page_id, $user)
    {
        $db = new db();
        $sql = <<<SQL
INSERT INTO comments (text, page_id, user) VALUES ('$text','$page_id','$user');
SQL;
        $db->conn->query($sql);
        header("location: /page/$page_id");
    }

}