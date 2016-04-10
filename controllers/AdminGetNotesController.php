<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 08.04.16
 * Time: 13:05
 */
class AdminGetNotesController
{
    public function __toString()
    {
        $data = new AdminGetNotesModel();

        return $data[0];

    }
}