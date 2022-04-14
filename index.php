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
     

    }
    else {
        home();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}