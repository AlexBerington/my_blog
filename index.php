<?php
session_start();
require_once ('classes/session.php');
require_once ('classes/db.php');
require_once('view/menu.php');

$db = new db();
switch ($_GET['temp']) {
    case "page":
        include("view/page.php");
        break;
    case "reg":
        include("view/reg.php");
        break;
    case "adminpanel":
        header('location: admin/?temp=main');
        break;
    default:
        include("view/home.php");
        break;
}
include ("templates/main.php");
$db->close();

