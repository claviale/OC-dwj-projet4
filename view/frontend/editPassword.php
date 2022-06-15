
<?php $title = "Modifier le mot de passe"; ?>

<?php ob_start(); ?>

<section class="titles">
    <div class="container">
        <div class="row bg-img">
            <div class="col-10 mx-auto description">
                <h1>Accès administrateur</h1>
                <h4>Modification du mot de passe</h4>
            </div>
        </div>
    </div> 
</section>


    

<div id="administration" class="container py-5">
    <div class="row align-items-center">
        <div class="col-8 mx-auto">
            <h3 class="text-center mb-5">Veuillez saisir votre identifiant, votre mot de passe actuel ainsi que votre nouveau mot de passe.</h3>
        </div>

        <div class="col-6 mx-auto">
            <form action="./index.php?action=editPassword" method="post">
                <div class="form-group">
                    <label for="user">Identifiant</label>
                    <input type="texte" id="user" class="form-control" name="user"/>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe actuel</label>
                    <input type="password" id="password" class="form-control" name="password" />
                </div>
                <div class="form-group">
                    <label for="password">Nouveau mot de passe</label>
                    <input type="password" id="newPassword" class="form-control" name="newPassword" />
                </div>
                <button type="submit" class="btn btn-primary my-3" value="Envoyer">Enregistrer le nouveau mot de passe</button>
            </form>
        </div>
    </div>   
</div>

       

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>