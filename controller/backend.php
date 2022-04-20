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

function addChapter($chapterId, $title, $content)
{
    $addManager = new PostManager(); 
    $chapter = $addManager->addPost($chapterId, $title, $content); 
}

function deleteChapter($id)
{
    $deleteManager = new PostManager(); 
    $chapter = $deleteManager->deletePost($id); 
}

function editChapterView() {
    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);
   
    require("view/backend/editChapter.php");
}

function editChapter($chapterId, $title, $content)
{
    $editManager = new PostManager(); 
    $chapter = $editManager->editPost($chapterId, $title, $content); 
}
