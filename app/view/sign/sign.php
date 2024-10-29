<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../config/Database.php';
require '../../model/UserModel.php';
require '../../controller/UserController.php';

$login = new UserController();
// $login->ConnectUser();
$title = 'Yummy | Sign';
$dir = '../../..';
require '../header/header.php';
?>



<div class="container mt-5 p-3 shadow rounded ">
    <h1 class='text-center'>YUMMY😋</h1>
    <p class='text-center'>Vous avez faim? Commandez chez nous !</p>
    <h3 class='text-center'>S'inscrire.</h3>
    <form method='post'>
        <div class="form-group">
            <div class='mb-2'>
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class='mb-2'>
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class='mb-2'>
                <label for="adress">Adress</label>
                <input type="text" class="form-control" name="adress">
            </div>
            <div class='mb-2'>
                <label for="tel">Tel</label>
                <input type="text" class="form-control" name="tel">
            </div>
            <div class='mb-2'>
                <label for="email">Mot de passe</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class='mb-2'>
                <label for="profil">Photo de Profil</label>
                <input id="file" type="file" class="form-control" name="profil"> 
                <div class="container mt-2 mb-2 d-flex justify-content-center">
                     <img id="img" src="" alt="profil" style="display: none; width:100px;height:100px; border-radius:50%">
                </div>
               
            </div>
            <div class='mt-2'>
                <input  type="submit" class="form-control btn btn-warning" value='Se connecter'> 
               
            </div>
    </form>
    <div class="container mt-3 text-center">
        <a href="">Deja un compte? Se connecter</a>
    </div>
</div>

</div>
<script src="./imageController.js"></script>
<?php require '../footer/footer.php'; ?>