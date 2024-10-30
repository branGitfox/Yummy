<?php

class CommandModel extends Database {
    public function New($id_prod) {
        $userInfo = $_SESSION['users'];
        $product_query = parent::getpdo()->prepare('SELECT * FROM product WHERE id_prod = ?');
        $product_query->execute([$id_prod]);
        $getProduct = $product_query->fetch();  
        $cmd_query = parent::getPdo()->prepare('INSERT INTO commands(`username`, `telephone`, `adress`, `cmd_name`, `prix_unit`, `id_user`, `nbr`) VALUES (?, ?, ?, ?, ?)');
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
}