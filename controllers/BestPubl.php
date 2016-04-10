<?php
class BestPubl
{
    public function render($contents)
    {
        while ($data = $this->res->fetch_row()) {
            ob_start();
            $id = $data[0];
            $h1 = $data[4];
            $s_content = mb_substr($data[6], 0, 300, 'utf-8') . '..';
            $date = $data[8];
            $counter = $data[9];
            $com_count = $data[10];
            $path = 'view/home.php';
            include $path;
            $contents .= ob_get_clean();
        }
        return $contents;
    }
    public function __toString()
    {

        $this->contents .= $this->render($this->contents);
        return $this->contents;



    }

    private $contents;

    public function __construct($db_conn)
    {

        $model = new BestPublModel($db_conn);
        $this->res = $model->getActive();

    }
}