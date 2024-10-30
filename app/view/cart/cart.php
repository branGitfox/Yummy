<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../config/Database.php';
require '../../model/UserModel.php';
require '../../controller/UserController.php';
$title = 'Yummy | Sign';
$dir = '../../..';
require '../header/header.php';

?>

<div class="container">
    <?php require '../nav/nav.php'; ?>
    <div class="container">
        <h1 class="text-center mb-2 mt-2">Vos Commandes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                     <th>Nom</th>
                     <th>Telephone</th>   
                     <th>commande(s)</th>
                     <th>prix unitaires</th>    
                     <th>Nombre(s)</th>       
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Brandon Fidelin</td>
                    <td>0389411835</td>
                    <td>tacos</td>
                    <td>10,000</td>
                    <td><a href="plus.php?id_p" class="btn btn-success mx-1">+</a> <span class="badge bg-secondary">15</span><a href="" class="btn btn-danger mx-2">-</a> </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>150000</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php require '../footer/footer.php'; ?>