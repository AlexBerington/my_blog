<?php
class CounterController
{
    private $id;
    public function __construct($id)
    {
        $this->id = $id;
        $coo = 'P'.$this->id;

        if(!$_COOKIE[$coo]){
            setcookie($coo,"null",time()+86400);
            new CounterModel($this->id);
        }

    }
}