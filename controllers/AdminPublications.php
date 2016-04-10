<?php

class AdminPublications
{

    private $res;
    private $contents;
    private $db;
    private $param;
    public function __construct($db)
    {
        $this->db = $db;
        $model = new AdminPublicationsModel($this->db);
        $this->res = $model->getPubls();


        $this->contents = $this->render($this->contents);


    }

    public function __toString()
    {
        return $this->contents;
    }

    private function render($contents)
    {

        while($data = $this->db->result->fetch_row()){
            ob_start();
            $id = $data[0];
            $h1 = $data[4];
            $date = $data[8];
            $publish = $data[7];
            $path = 'view/admin_publ_all.php';
            include ($path);
            $contents .= ob_get_clean();
        }
        return $contents;

    }
}
