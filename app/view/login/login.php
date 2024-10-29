<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../config/Database.php';
require '../../model/UserModel.php';
require '../../controller/UserController.php';

$login = new UserController();
$login->ConnectUser();
$title = 'Yummy | Login';
$dir = '../../..';
require '../header/header.php';
?>



<div class="container mt-5 p-3 shadow rounded ">
    <h1 class='text-center'>YUMMY😋</h1>
    <p class='text-center'>Vous avez faim? Commandez chez nous !</p>
    <h3 class='text-center'>Se connecter.</h3>
    <form method='post'>
        <div class="form-group">
            <div class='mb-2'>
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class='mb-2'>
                <label for="email">Mot de passe</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class='mt-2'>

                <input type="submit" class="form-control btn btn-warning" value='Se connecter'>
            </div>
    </form>
    <div class="container mt-3 text-center">
        <a href="../sign/sign.php">Pas de compte? s'inscrire</a>
    </div>
</div>

</div>

<?php require '../footer/footer.php'; ?>