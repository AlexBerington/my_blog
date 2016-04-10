<?php
class AdminMainPage
{
    public function __toString()
    {
       return view::render('admin_main',[
           'notes' => new AdminGetNotesController()
       ]);
    }

}