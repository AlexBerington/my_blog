<?php
require_once('../classes/db.php');
require_once('../classes/password.php');
require_once('../classes/session.php');
session_start();
$db = new db();
$login = $db->escape($_POST['username']);
$pass = new password($db->escape($_POST['pass']));


$sql = <<<SQL
    SELECT username,pwd FROM users WHERE username = '$login' AND pwd = '$pass';
SQL;
$db->query($sql);

if($db->data['username']&&$db->data['pwd']){
    $user = $db->data['username'];
    session::set('user',$user);
    header('location: ../?option=home');
}else{
    echo "error";
}
$db->close();



