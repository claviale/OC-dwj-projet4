<?php
require_once("model/Manager.php");

class AdminManager extends Manager
{
    public function getAdmin()
    {
        $db = $this->dbConnect();
        $req= $db->query('SELECT * FROM admin ');
        $adminLog = $req->fetch();

        return $adminLog;
    }

    
    

}

