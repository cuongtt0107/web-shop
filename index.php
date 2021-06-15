<?php
session_start();
$url = isset($_GET['url'])==true ? $_GET['url'] : "/";
require_once "./commons/uitls.php";
require_once "./vendor/autoload.php";
require_once "./config/database.php";
require_once "./commons/routes.php";

?>
