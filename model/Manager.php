<?php

//Connexion à la base de données 

class Manager
{
    protected function dbConnect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=p4;charset=utf8', 'root', 'root');
            return $db;
        }
        catch(Exception $e)
        {
            die("Erreur : " .$e->getMessage());
        }

    }
}
