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
                <a href="index.php?action=chaptersView"><button type="button" class="btn btn-outline-primary col-7 my-3">Gestion des chapitres</button></a>      
                <a href="index.php?action=commentsView"><button type="button" class="btn btn-outline-primary col-7 my-3">Gestion des commentaires</button></a>      
            </div> 
        </div>
</div> 

</div>


<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>