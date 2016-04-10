<?php

class CommentsController
{
    private $res;
    private $contents;
    private $db;
    public function __construct($url_id, $db)
    {
        $this->db = $db;
        $model = new CommentsModel();
        $this->res = $model->gerComments($this->db, $url_id);
        $this->contents .= $this->render($this->contents);




    }

    public function __toString()
    {


        return $this->contents;
    }

    private function render($contents)
    {

        while($data = $this->res->fetch_row()){

            ob_start();
            $u_name = $data[3];
            $u_com = $data[1];
            $path = 'view/comments.php';
            include ($path);
            $contents .= ob_get_clean();
        }
        return $contents;
    }

}