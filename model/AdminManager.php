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

    public function editAdminPassword($login, $password)
    {
        $db = $this->dbConnect();
        $editChapter = $db->prepare('UPDATE admin SET password = ? WHERE login = ?');
        $editChapter->execute(array($password, $login));

        header('Location: index.php?action=adminAccess');
    }

}

