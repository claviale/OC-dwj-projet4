<?php $title = "Accueil"; ?>

<?php ob_start(); ?>

<section class="titles">
    <div class="container">
        <div class="row bg-img">
            <div class="col-10 mx-auto description">
                <h1>Billet simple pour l'Alaska !</h1>
                <h4>Le roman en ligne</h4>
            </div>
        </div>
    </div> 
</section>

<p>Hello world</p>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>