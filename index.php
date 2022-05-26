<?php

session_start(); 

require('controller/frontend.php');
require('controller/backend.php');


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            home();
        }
        elseif ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'biography') {
            biography();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'adminAccess') {
            adminAccess();
        }
        elseif ($_GET['action'] == 'adminLogin') {
            if (!empty($_POST['user']) && !empty($_POST['password'])) {
               
                checkLogin();
            }
            else {
                throw new Exception('Un ou plusieurs champs ne sont pas remplis.');
            }
        }
        elseif ($_GET['action'] == 'administration') {
            if (isset($_SESSION['LOGGED_USER'])) {
                displayBack();
            } else {
                throw new Exception('Aucun utilisateur identifié.');
            }
        }
        elseif (($_GET['action'] == 'logout')) {
            if (isset($_SESSION['LOGGED_USER'])) {
                session_destroy();
                header('Location: index.php?action=home');
            }
        }
        elseif ($_GET['action'] == 'chaptersView') {
            chaptersView();
        }
        elseif ($_GET['action'] == 'newChapterView') {
            createNewChapterView();
        }
        elseif ($_GET['action'] == 'addNewChapter') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                addChapter($_POST['title'], $_POST['content']);
            }
            else {
                throw new Exception('Veuillez remplir tous les champs avant de valider la sauvegarde.');
            }
        }
        elseif ($_GET['action'] == 'deleteChapter') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deleteChapter($_GET['id']);
                deleteCommentPost($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'editChapterView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
            editChapterView();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'editChapter') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['titleUpdate']) && !empty($_POST['contentUpdate'])) {
                    editChapter($_GET['id'], $_POST['titleUpdate'], $_POST['contentUpdate']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'commentsView') {
            commentsView();
        }
        elseif ($_GET['action'] == 'deleteComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deleteComment($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
        }
        elseif ($_GET['action'] == 'reportComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                reportComment($_GET['id'], $_GET['post_id']);
            }
            else {
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
        }
        
    }
    else {
        home();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}