
<?php
require_once ('../classes/registration.php');
require_once ('../classes/db.php');
require_once ('../classes/password.php');
$dbs = new db;
$reg = new registration($_POST);
if($reg->validation()){
    $email = $dbs->escape($reg->getEmail());
    $login = $dbs->escape($reg->getLogin());
    $pwd = new password($reg->getPwd());
    $sql = <<<SQL
INSERT INTO users (username, pwd, email) VALUES ('$login','$pwd','$email');
SQL;

    $dbs->conn->query($sql);
    $dbs->close();
    header('location: ../index.php');

}
