<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../config/Database.php';
require '../../model/UserModel.php';
require '../../controller/UserController.php';
$title = 'Yummy | Sign';
$dir = '../../..';
require '../header/header.php';
?>

<?php require '../footer/footer.php'; ?>