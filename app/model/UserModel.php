<?php 

class UserModel extends Database {

    /**
     * Va retourner la liste des utilisateurs
     * @return []|null
     */

     public function UserList(): array
     {
        $query = parent::getPdo()->query('SELECT * FROM users');
        $query->execute();
        return $query->fetchAll();
     }

    /**
     * Va Creer un nouveau utilisateur
     * @return []|null
     */

     public function CreateUser(String $username,String $email, String $password, String $adress, String $tel, String $profil ): void{
         $query = parent::getPdo()->prepare('INSERT INTO users(`username`,`email`,`password`,`adress`,`tel`, `profil`) VALUES (?,?,?,?,?,?)');
         $query->execute([$username,$email, $password, $adress, $tel, $profil]);
     }

    /**
     * Va tester si un email existe deja dans la table users
     * @return bool
     */

     private function CheckExistEmail(String $email):bool{
        $query = parent::getpdo()->prepare('SELECT email FROM users WHERE email = ?');
        $query->execute([$email]);
        if($query->rowCount() < 0){
            return true;
        }else{
            return false;
        }
     }
      
     /**
      * @return bool|String
      */
     public function ConnecUser() {

     }

}