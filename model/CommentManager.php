<?php
require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT comments.id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr, report FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function showComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT comments.id, post_id, title, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr, report FROM comments INNER JOIN posts ON comments.post_id = posts.id ORDER BY comment_date DESC');

        return $comments;
    }

    public function deleteComment($idComment) 
    {
        $db = $this->dbConnect();
        $deleteComment = $db->prepare('DELETE FROM comments WHERE id = ?');
        $deleteComment->execute(array($idComment));

        header('Location: index.php?action=commentsView');

    }

    public function deleteCommentPost($idPost) 
    {
        $db = $this->dbConnect();
        $deleteCommentPost = $db->prepare('DELETE FROM comments WHERE post_id = ?');
        $deleteCommentPost->execute(array($idPost));

        header('Location: index.php?action=chaptersView');

    }

    public function reportComment($idComment) 
    {
        $db = $this->dbConnect();
        $reportComment = $db->prepare('UPDATE comments SET report = report + 1 WHERE id = ?');
        $reportComment->execute(array($idComment));

        return $reportComment;
       

    }

}


