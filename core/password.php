<?php
class password
{

    private $pwd = "We must secure the existence of our people and a future for white children";

    private $hash;
    function __construct($pass)
    {       $this->pwd .= $pass;;
            $this->hash = md5(md5($this->pwd));
        }



    function __toString()
    {
        return $this->hash;
    }
}