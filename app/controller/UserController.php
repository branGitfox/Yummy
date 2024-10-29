<?php 

class UserController extends UserModel {

    /**
     * Va retouner l'email entrer par l'utilisateur
     * @return String
     */
    private function getEmail():String{
        if(isset($_POST['email'])){
            return htmlentities(htmlspecialchars($_POST['email']));
        }
    }

    /**
     * Va retouner le mot de passe entrer par l'utilisateur
     * @return String
     */
    private function getPassword():String{
        if(isset($_POST['password'])){
            return htmlentities(htmlspecialchars($_POST['password']));
        }
    }

    /**
     * Va connecter un  utilisateur existant
     * @return void
     */
    public function connectUser():void{
        parent::connectUser($this->getEmail(), $this->getPassword());
    }
}