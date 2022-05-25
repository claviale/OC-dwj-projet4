<?php $title = "Modifier le chapitre"; ?>

<?php ob_start(); ?>

<div class="container">
        <div class="row">
            <div class="col mx-auto mt-2 text-center">
                <h3><u>Modifier un chapitre</u></h3>
            </div>
        </div>
</div> 


<form action="index.php?action=editChapter&id=<?=$chapter['id']?>" method="post" class="container">
    <div class="form-group row my-4">
            <div class="col-9">
                <input type="text" class="form-control" name="titleUpdate" placeholder="Titre du chapitre" value="<?= htmlspecialchars($chapter['title']) ?>"/>
            </div>
    </div>
    

    <div class="form-group">
        <div class="row">
            <div class="col-12 mx-auto">
                <textarea id="basic-example" placeholder="Contenu du chapitre" name="contentUpdate"><?= $chapter['content'] ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto text-center my-5">
                <button type="submit" class="btn btn-primary mx-3">Enregistrer les modifications</button>
                <a href="index.php?action=chaptersView">Annuler</a>
            </div>
        </div>

        
        
    </div>
</form>





<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>