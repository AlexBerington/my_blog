<?php
class AdminUpdatePublishModel
{
    public function __construct($params)
    {
        $db =new db();
        $id = $params['id'];
        $title = $params['title'];
        $meta_d = $params['meta_d'];
        $meta_k = $params['meta_k'];
        $h1 = $params['h1'];
        $s_desc = $params['s_content'];
        $content = $params['content'];
        $publish = $params['publish'];
        $date = $params['date'];
        $sql = <<<SQL
UPDATE pages SET page_title = '$title', page_h1 = '$h1', page_meta_d = '$meta_d', page_meta_k = '$meta_k', page_s_desc = '$s_desc', page_content = '$content', page_publish = '$publish', publish_date = '$date' WHERE page_id = '$id' ;
SQL;
        $db->conn->query($sql);

    }
}