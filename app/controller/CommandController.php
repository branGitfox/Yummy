<?php 

class CommandController extends CommandModel{
    public function NewCommand(){
        if(isset($_GET['id_prod'])){
            parent::New($_GET['id_prod']);
            header('location:../view/cart.php');
        }
    }

    public function GetUserCommand(){
        $query = parent::getPdo()->prepare('SELECT * FROM commands WHERE id_user = ?');
        $query->execute([$_SESSION['users']['id']]);
        return $query->fetchAll();
    }

    public function IncrementNbr() {
        if(isset($_GET['id_cmd'])){
            parent::Plus($_GET['id_cmd']);
        }
    }
}