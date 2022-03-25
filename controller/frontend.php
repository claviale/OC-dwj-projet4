<?php

session_start(); 

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');


function home()
{
    require("view/frontend/home.php");
}

function biography()
{
    require("view/frontend/biography.php");
}

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require("view/frontend/listPostView.php");
    
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}


function adminAccess()
{
    require("view/frontend/login.php");
}

function checkLogin()
{
    $adminManager = new AdminManager();
    $adminLog = $adminManager->getAdmin();
    
    if ($adminLog['login'] === $_POST['user'] && $adminLog['password'] === $_POST['password']) {
        //start session?
        require("view/backend/admin.php");
    }
    else {
        throw new Exception("L'identifiant et/ou le mot de passe sont incorrects.");
    }
    
}

  

