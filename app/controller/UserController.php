<?php


class UserController extends UserModel
{

    /**
     * Va retouner l'email entrer par l'utilisateur
     * @return String
     */
    private function GetEmail(): String
    {
        if (isset($_POST['email'])) {
            return htmlentities(htmlspecialchars($_POST['email']));
        }
    }

    /**
     * Va retouner le mot de passe entrer par l'utilisateur
     * @return String
     */
    private function GetPassword(): String
    {
        if (isset($_POST['password'])) {
            return htmlentities(htmlspecialchars($_POST['password']));
        }
    }

    /**
     * Va connecter un  utilisateur existant
     * @return void
     */
    public function ConnectUser(): void
    {
        if (parent::ConnecUser($this->GetEmail(), $this->GetPassword())) {
            header('location:../../index.php');
        } else {
            echo 'verifier vos information';
        };
    }
}
