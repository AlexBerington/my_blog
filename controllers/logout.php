<?php
require_once('../classes/session.php');
session_start();
session::delete('user');
session::destroy();
header('location: ../index.php');