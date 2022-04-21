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
                <input type="text" class="form-control" name="idUpdate" placeholder="Numéro du chapitre" value="<?= nl2br(htmlspecialchars($chapter['id'])) ?>" disabled="disabled" />
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
        <div class="row col-4 mx-auto">
            <button type="submit" class="btn btn-primary my-4">Enregistrer les modifications</button>
        </div>
        
    </div>
</form>





<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>