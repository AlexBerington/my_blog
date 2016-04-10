<?php
class TodayPubl
{
    public $res;
    private $contents;

    public function __construct($db_conn)
    {

        $model = new TodayPublModel($db_conn);
        $this->res = $model->getActive();

    }

    public function __toString()
    {

        $this->contents .= $this->render($this->contents);
        return $this->contents;



    }


    public function render($contents)
    {
        while ($data = $this->res->fetch_row()) {
            ob_start();
            $id = $data[0];
            $h1 = $data[4];
            $s_content = mb_substr($data[6],0,300,'utf-8').'..';
            $date = $data[8];
            $path = 'view/home.php';
            include $path;
            $contents .= ob_get_clean();
        }
        return $contents;


    }
}