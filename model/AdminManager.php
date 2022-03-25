<?php
require_once("model/Manager.php");

class AdminManager extends Manager
{
    public function getAdmin()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT login, password FROM admin');
        $req->execute(array(1));
        $adminLog = $req->fetch();

        return $adminLog;
    }

    

}

