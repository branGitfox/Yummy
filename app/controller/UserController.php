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
     * Va retouner l'adress entrer par l'utilisateur
     * @return String
     */
    private function GetAdress(): String
    {
        if (isset($_POST['adress'])) {
            return htmlentities(htmlspecialchars($_POST['adress']));
        }
    }


          /**
     * Va retouner le telephone entrer par l'utilisateur
     * @return String
     */
    private function GetTel(): String
    {
        if (isset($_POST['tel'])) {
            return htmlentities(htmlspecialchars($_POST['tel']));
        }
    }

              /**
     * Va retouner le nom entrer par l'utilisateur
     * @return String
     */
    private function GetUsername(): String
    {
        if (isset($_POST['username'])) {
            return htmlentities(htmlspecialchars($_POST['username']));
        }
    }

                /**
     * Va retouner retourne la photo de profil de  l'utilisateur
     * @return String
     */
    private function GetProfil():string
    {
        if (isset($_FILES['profil'])) {
            $image = $_FILES['profil'];
            $image_tmp = $image['tmp_name'];
            $image_name = $image['name'];
            $image_exploded = explode('.', $image_name);
            $image_ext = end($image_exploded);
            $allowed_ext = ['jpg', 'png', 'jpeg'];
            if(in_array($image_ext, $allowed_ext)){
                $new_image = time().$image_ext;
                if(move_uploaded_file($image_tmp, '../images'.$new_image)){
                    return $new_image;
                }
            }
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

   public function Create():void{

   }
}
