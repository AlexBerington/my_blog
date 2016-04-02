<?php


class Register
{
    private $render_result;
    public function __toString()
    {
        $this->render_result = view::render('reg');
        return $this->render_result;

    }

}