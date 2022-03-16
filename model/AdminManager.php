<?php
require_once("model/Manager.php");

class AdminManager extends Manager
{
    public function getAdmin($user, $password)
    {
        $db = $this->dbConnect();
        $dataUser = $db->query('SELECT * FROM admin');
        $user = $dataUser->fetch();
        var_dump($user);
        if ($dataUser != false) {
            if ($password == $user['password']) {
                return $user;
            } else {
                echo "Mot de passe incorrect, veuillez réessayer.";
            }
        }
        else {
            echo "Echec de la connexion.";
        }
    }
    

}