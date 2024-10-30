

<?php 

class ProductModel extends Database {
    public function getProduct() {
        if(isset($_GET['q'])){
            $query = parent::getPdo()->prepare("SELECT * FROM product WHERE prodname LIKE '%{$_GET['q']}%'");
            $query->execute();
        }elseif(isset($_GET['f'])){
            $query = parent::getPdo()->prepare("SELECT * FROM product WHERE category_id = ?");
            $query->execute([$_GET['f']]);
        }elseif(isset($_GET['q']) && isset($_GET['f'])){
            $query = parent::getPdo()->prepare("SELECT * FROM product WHERE prodname LIKE '%{$_GET['q']}%' AND category_id = ?");
            $query->execute([$_GET['f']]);
        }else{
            $query = parent::getPdo()->prepare("SELECT * FROM product");
            $query->execute();
        }

        return $query->fetchAll();
    }
}