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

     
}