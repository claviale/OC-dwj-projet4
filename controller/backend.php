<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');


function chaptersView()
{
    $postManager = new PostManager(); // Création d'un objet
    $chapters = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require("view/backend/chapters.php");
}

function createNewChapterView() {
    require("view/backend/createChapter.php");
}

function addChapter($title, $content)
{
    $addManager = new PostManager(); 
    $chapter = $addManager->addPost($title, $content); 
}

function deleteChapter($id)
{
    $deleteManager = new PostManager(); 
    $chapter = $deleteManager->deletePost($id); 
    
}

function editChapterView() {
    $postManager = new PostManager();
    $chapter = $postManager->getPost($_GET['id']);
   
    require("view/backend/editChapter.php");
}

function editChapter($titleUpdate, $contentUpdate, $id)
{
    $editManager = new PostManager(); 
    $chapter = $editManager->editPost($titleUpdate, $contentUpdate, $id); 

}

function commentsView()
{
    $commentManager = new CommentManager();
    $comments = $commentManager->showComments();

    require("view/backend/comments.php");
}

function deleteComment($id)
{
    $deleteManager = new CommentManager(); 
    $comment = $deleteManager->deleteComment($id); 
}

function deleteCommentPost($id)
{
    $deleteManager = new CommentManager(); 
    $commentsPost = $deleteManager->deleteCommentPost($id); 
}

