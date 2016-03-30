<?php
session_start();
require_once ('../classes/session.php');
require_once ('../classes/db.php');
switch($_GET['temp']){
    case "publications":
        include ('view/publications.php');
        break;
    case "users":
        include ('view/users.php');
        break;
    case "config":
        include ('view/config.php');
        break;
    case "add_publish_form":
        include ('view/add_publish_form.php');
        break;
    default:
        include ('view/main.php');

}
include ('templates/admin_panel.php');
