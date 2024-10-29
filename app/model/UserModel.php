<?php

class UserModel extends Database
{

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
     * @param $username 
     * 
     * @return void
     */

    public function CreateUser(String $username, String $email, String $password, String $adress, String $tel, String $profil): void
    {
        if ($this->CheckExistEmail($email) === false) {
            $query = parent::getPdo()->prepare('INSERT INTO users(`username`,`email`,`password`,`adress`,`tel`, `profil`) VALUES (?,?,?,?,?,?)');
            $query->execute([$username, $email, $password, $adress, $tel, $profil]);
            header('location:../View/login/login.php');
        } else {
            echo 'cet email existe deja';
        }
    }

    /**
     * Va tester si un email existe deja dans la table users
     * @return bool
     */

    private function CheckExistEmail($email): bool
    {
        $query = parent::getpdo()->prepare('SELECT email FROM users WHERE email = ?');
        $query->execute([$email]);
        if ($query->rowCount() < 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool|String
     */
    public function ConnecUser($email,  $password): bool
    {
        if ($this->CheckExistEmail($email) === true) {
            if (password_verify($password, $this->getUser($email)['password'])) {
                $_SESSION['users'] = [
                    'id' => $this->getUser($email)['id_user'],
                    'name' => $this->getUser($email)['username'],
                    'email' => $this->getUser($email)['email'],
                    'tel' => $this->getUser($email)['tel'],
                    'adress' => $this->getUser($email)['adress']
                ];

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Va retourner les infos d'un utilisateur
     * @return []
     */

    public function getUser(String $email)
    {
        $query = parent::getPdo()->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch();
    }
}
