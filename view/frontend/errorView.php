<?php $title = "Erreur"; ?>

<?php ob_start(); ?>


<div id="administration" class="container py-5">
    <div class="row align-items-center" style="height: 700px">
        <div class="col h-95 d-inline-block" >
            <h3 class="text-center " >Erreur :</h3>
            <h4 class="text-center "><?php echo $errorMessage; ?></h4>
            <div class="text-center my-5"><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour à la page précédente</a></div>
        </div>
    </div>   
</div>

       

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>