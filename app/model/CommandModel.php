<?php

class CommandModel extends Database {
    public function New($id_prod) {
        $userInfo = $_SESSION['users'];
        $product_query = parent::getpdo()->prepare('SELECT * FROM product WHERE id_prod = ?');
        $product_query->execute([$id_prod]);
        $getProduct = $product_query->fetch();  
        $cmd_query = parent::getPdo()->prepare('INSERT INTO commands(`username`, `telephone`, `adress`, `cmd_name`, `prix_unit`, `id_user`, `nbr`) VALUES (?, ?, ?, ?, ?, ?, ?  )');
        $cmd_query->execute([$userInfo['name'], $userInfo['tel'], $userInfo['adress'], $getProduct['prodname'], $getProduct['price'], $userInfo['id'], 1]);
    }

    public function Plus($id_com){
        $cmd_query = parent::getPdo()->prepare('SELECT * FROM commands WHERE id_com = ?');
        $cmd_query->execute([$id_com]);
        $getCom = $cmd_query->fetch();
        $increment_nbr = $getCom['nbr'] + 1;
        $update = parent::getPdo()->prepare('UPDATE commands SET nbr=? WHERE id_com=?');
        $update->execute([$increment_nbr, $id_com]);
        header('location:../cart/cart.php');
    }

    public function Moins($id_com){
        $cmd_query = parent::getPdo()->prepare('SELECT * FROM commands WHERE id_com = ?');
        $cmd_query->execute([$id_com]);
        $getCom = $cmd_query->fetch();
        $decrement_nbr = $getCom['nbr'] - 1;
        $update = parent::getPdo()->prepare('UPDATE commands SET nbr=? WHERE id_com=?');
        $update->execute([$decrement_nbr, $id_com]);
        header('location:../cart/cart.php');
    }

    public function Total(){
        $query = parent::getPdo()->prepare('SELECT * FROM commands WHERE id_user=?');
        $query->execute([$_SESSION['users']['id']]);
        $cmds = $query->fetchAll();
        $total=0;
        foreach($cmds as $cmd){
            $total+= $cmd['nbr'] * $cmd['prix_unit'];
        }

        return $total;
    }


    public function DeleteCom($id_com){
        $query = parent::getPdo()->prepare('DELETE FROM commands WHERE id_com = ?');
        $query->execute([$id_com]);
        header('location:../view/cart/cart.php');
    }
}