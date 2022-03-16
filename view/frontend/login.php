
<?php $title = "Administration"; ?>

<?php ob_start(); ?>

<section class="titles">
    <div class="container">
        <div class="row bg-img">
            <div class="col-10 mx-auto description">
                <h1>Accès administrateur</h1>
            </div>
        </div>
    </div> 
</section>


    

<div id="administration" class="container py-5">
    <div class="row align-items-center">
        <div class="col-8 mx-auto">
            <h3 class="text-center mb-5">Veuillez saisir votre identifiant et votre mot de passe pour accéder à l'interface administration.</h3>
        </div>

        <div class="col-6 mx-auto">
            <form action="./index.php?action=connexion" method="post">
                <div class="form-group">
                    <label for="user">Identifiant</label>
                    <input type="texte" id="user" class="form-control" name="user"/>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" class="form-control" name="password" />
                </div>
                <button type="submit" class="btn btn-primary my-3" value="Envoyer">S'identifier</button>
            </form>
        </div>
    </div>   
</div>

       

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>