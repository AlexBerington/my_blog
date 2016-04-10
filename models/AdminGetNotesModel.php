<?php
class AdminGetNotesModel
{
    private $res;
    public function __construct()
    {
        $db = new db();
        $sql = <<<SQL
SELECT * FROM notes;
SQL;
        $this->res = $db->conn->query($sql);
        return $db->data    ;
    }
}