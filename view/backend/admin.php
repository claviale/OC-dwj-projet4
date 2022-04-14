<?php $title = "Administration"; ?>

<?php ob_start(); ?>

<div>
<div class="container">
        <div class="row col-8 border border-secondary my-5 mx-auto text-center pb-5">
            <div class="col-12 my-3 ">
                        <h3>Bonjour <?php echo $_SESSION['LOGGED_USER'];?> !</h3>                   
            </div>
            <div class="col-12">
                <p class="my-3">Bienvenue dans l'espace administration, retrouvez ici toutes les fonctionnalités de votre blog :</p>   
                <button type="button" class="btn btn-outline-primary col-7 my-3">Gestion des chapitres</button>      
                <button type="button" class="btn btn-outline-primary col-7 my-3">Gestion des commentaires</button>      
            </div> 
        </div>
</div> 

</div>


<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>