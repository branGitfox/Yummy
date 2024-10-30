<?php 

session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../config/Database.php';
require '../../model/CommandModel.php';
require '../../controller/CommandController.php';
$cmd = new CommandController();
$cmd->IncrementNbr();
?>