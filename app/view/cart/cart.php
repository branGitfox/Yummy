<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../config/Database.php';
require '../../model/CommandModel.php';
require '../../controller/CommandController.php';
$title = 'Yummy | cart';
$dir = '../../..';
require '../header/header.php';
$cmd = new CommandController();

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
                     <th>Adresse</th>   
                     <th>commande(s)</th>
                     <th>prix unitaires</th>        
                     <th>Nombre(s)</th>       
                     <th>Annuler😵</th>       
                </tr>
            </thead>
            <tbody>
                <?php foreach($cmd->GetUserCommand() as $data):?>
                <tr>
                    <td><?= $data['username']?></td>
                    <td><?= $data['telephone']?></td>
                    <td><?= $data['adress']?></td>
                    <td><?= $data['cmd_name']?></td>
                    <td><?= $data['prix_unit']?></td>
                    <td><a href="plus.php?id_cmd=<?= $data['id_com']?>" class="btn btn-success mx-1">+</a> <span class="badge bg-secondary"><?=$data['nbr']?></span><a href="moins.php?id_cmd=<?= $data['id_com']?>" class="btn btn-danger mx-2">-</a></td>
                    <td><a class="btn btn-danger" href="delete.php?id_com=<?=$data['id_com']?>">X</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td><?=number_format($cmd->Total())?> MGA</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php require '../footer/footer.php'; ?>