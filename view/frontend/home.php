<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<section class="titles">
    <div class="container">
        <div class="row bg-img">
            <div class="col-10 mx-auto description">
                <h1>Billet simple pour l'Alaska</h1>
                <h4>Le roman en ligne</h4>
            </div>
        </div>
    </div> 
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="news col-9 mx-auto border border-secondary text-center py-3">
                <h3>
                    Découvrez mon nouveau roman : "Billet simple pour l'Alaska" !
                </h3>
                
                <p class="col-10 mx-auto my-5">
                    Toutes les semaines, découvrez un nouveau chapitre du roman, publié directement ici, et accompagnez moi pour ce long voyage vers l'Alaska.
                    N'hésitez pas à commenter les chapitres, vos mots peuvent être importants pour la suite de l'histoire !
                </p>
                <a class="btn btn-outline-primary mx-2 mb-4" href="index.php?action=listPosts">Voir tous les chapitres</a>
                <a class="btn btn-outline-primary mx-2 mb-4" href="index.php?action=biography">En savoir plus sur l'auteur</a>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>