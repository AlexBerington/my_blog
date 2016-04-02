<?php


class db
{
    public $conn;
    public $data;
    public $result;
    function __construct()
    {

        $this->conn = new mysqli(configs::$db_host, configs::$db_user, configs::$db_pwd, configs::$db_name);
        $this->conn->set_charset('utf8');

    }


    public function escape($string)
    {
        return mysqli_escape_string($this->conn, $string);

    }

    public function query($sql)
    {
        $this->result = $this->conn->query($sql);
        $this->data = $this->result->fetch_assoc();


    }


    public function close(){
        $this->conn->close();
    }


}


