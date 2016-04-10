<?php
class AdminSavePublishModel
{
    public function __construct($params)
    {
        $db = new db();
        $title = $params['title'];
        $meta_d = $params['meta_d'];
        $meta_k = $params['meta_k'];
        $h1 = $params['h1'];
        $s_desc = $params['s_content'];
        $content = $params['content'];
        $publish = $params['publish'];

        $date = date("m.d.y");
        $sql = <<<SQL
INSERT INTO pages(page_title,page_meta_d,page_meta_k,page_h1,page_s_desc,
page_content,page_publish,publish_date) VALUES ('$title','$meta_d','$meta_k','$h1','$s_desc','$content',
'$publish','$date');
SQL;
        $db->conn->query($sql);

    }
}