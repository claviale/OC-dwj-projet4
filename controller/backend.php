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

