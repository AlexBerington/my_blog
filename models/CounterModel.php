<?php
class CounterModel
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
        $db = new db();
        $sql = <<<SQL
UPDATE pages SET counter = counter+1 WHERE page_id = '$this->id' LIMIT 1;
SQL;
         $db->conn->query($sql);
    }
}