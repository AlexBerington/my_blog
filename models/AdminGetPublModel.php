<?php
class AdminGetPublModel
{
    private $id;
    public $db;
    public function __construct($id)
    {
        $this->id = $id;
        $this->db = new db();
        $sql = <<<SQL
SELECT * FROM pages WHERE page_id = '$this->id' LIMIT 1;
SQL;
        $this->db->query($sql);

    }


}