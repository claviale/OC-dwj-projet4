<?php
require('controller/frontend.php');

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
        elseif ($_GET['action'] == 'adminPassword') {
            adminPassword();
        }
        elseif ($_GET['action'] == 'connexion') {
            if (isset($_POST['user']) && isset($_POST['password'])) {
                if (!empty($_POST['user']) && !empty($_POST['password'])) {
                    adminAccess($_POST['user'], $_POST['password']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
        
        }
        elseif (($_GET['action'] == 'administration')) {
            if (isset($_SESSION['utilisateur'])) {
                displayAdminInterface();
            } else {
                echo "Mot de passe incorrect";
            }
        }


    }
    else {
        home();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}