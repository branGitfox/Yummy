<?php
class Database
{
    private $host = "localhost";
    private $db = "yummy";
    private $user = 'root';
    private $pass = '';
    private $pdo = null;

    /**
     * connexion mysql
     * @return PDO
     */
    private function connect(): PDO

    {
        try{

            return new PDO("mysql:host=$this->host;dbname=$this->db;", $this->user, $this->pass);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    /**
     * retourne l'instance du PDO (singleton)
     * @return PDO
     */

    public function getPdo(): PDO
    {
        if ($this->pdo === null) {
            $this->pdo = $this->connect();
        }

        return $this->pdo;
    }



}
