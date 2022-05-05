<?php
require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function addPost($title, $content)
    {
        $db = $this->dbConnect();
        $addChapter = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES (?, ?, NOW())');
        $addChapter->execute(array($title, $content));

        header('Location: index.php?action=chaptersView');
    }

    public function deletePost($idChapter) 
    {
        $db = $this->dbConnect();
        $deleteChapter = $db->prepare('DELETE FROM posts WHERE id = ?');
        $deleteChapter->execute(array($idChapter));

        header('Location: index.php?action=chaptersView');

    }

    public function editPost($id, $title, $content)
    {
        $db = $this->dbConnect();
        $editChapter = $db->prepare('UPDATE posts SET title = ? , content = ? WHERE id = ? ');
        $editChapter->execute(array($title, $content, $id));

        header('Location: index.php?action=chaptersView');
    }

    
}