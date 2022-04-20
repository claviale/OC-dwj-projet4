<?php $title = "Nouveau chapitre"; ?>

<?php ob_start(); ?>

<div class="container">
        <div class="row">
            <div class="col mx-auto mt-4 text-center">
                <h3><u>Créer un nouveau chapitre</u></h3>
            </div>
        </div>
</div> 


<form action="index.php?action=addNewChapter" method="post" class="container">
    <div class="form-group row my-5">
            <div class="col-3">
                <input type="text" class="form-control" name="id" placeholder="Numéro du chapitre">
            </div>
            <div class="col-9">
                <input type="text" class="form-control" name="title" placeholder="Titre du chapitre">
            </div>
    </div>
    

    <div class="form-group">
        <div class="row">
            <div class="col-12 mx-auto">
                <textarea id="basic-example" placeholder="Contenu du chapitre" name="content"></textarea>
            </div>
        </div>
        <div class="row col-4 mx-auto">
            <button type="submit" class="btn btn-primary my-4">Enregistrer le nouveau chapitre</button>
        </div>
        
    </div>
</form>






<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>