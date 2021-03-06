<?php
class HomePageController
{
    public $res;
    private $contents;

    public function __construct($page, $db_conn)
    {

        $model = new HomePageModel($db_conn);
        $num = configs::$post_per_page;
        $start = $page * $num - $num;
        $lim = "LIMIT " . $start . "," . $num;
        $this->res = $model->getActive($lim);

    }

    public function __toString()
    {

        $this->contents .= $this->render($this->contents);
            return $this->contents;



    }


    public function render($contents)
    {
        $db = new db();
        $dd = new CommentsModel();
        while ($data = $this->res->fetch_row()) {
            ob_start();
            $id = $data[0];
            $h1 = $data[4];
            $s_content = mb_substr($data[6],0,300,'utf-8').'..';
            $date = $data[8];
            $counter = $data[9];
            $com_count = $data[10];
            $path = 'view/home.php';
            include $path;
            $contents .= ob_get_clean();
        }
            return $contents;


    }
}