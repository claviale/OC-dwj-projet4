<?php $title = "Modifier le chapitre"; ?>

<?php ob_start(); ?>

<div class="container">
        <div class="row">
            <div class="col mx-auto mt-4 text-center">
                <h3><u>Modifier un chapitre</u></h3>
            </div>
        </div>
</div> 


<form action="index.php?action=editChapter&id=<?=$chapter['id']?>" method="post" class="container">
    <div class="form-group row my-5">
            <div class="col-3">
                <input type="text" class="form-control" name="num" placeholder="Numéro du chapitre" value="<?= nl2br(htmlspecialchars($chapter['num'])) ?>" />
            </div>
            <div class="col-9">
                <input type="text" class="form-control" name="titleUpdate" placeholder="Titre du chapitre" value="<?= nl2br(htmlspecialchars($chapter['title'])) ?>"/>
            </div>
    </div>
    

    <div class="form-group">
        <div class="row">
            <div class="col-12 mx-auto">
                <textarea id="basic-example" placeholder="Contenu du chapitre" name="contentUpdate"><?= $chapter['content'] ?></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <button type="submit" class="btn btn-primary my-5 col-3 mx-auto">Enregistrer les modifications</button>
            <button type="button" class="btn btn-outline-primary my-5 col-3 mx-auto"><a href="index.php?action=chaptersView">Annuler</a></button>
        </div>

        
        
    </div>
</form>





<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>