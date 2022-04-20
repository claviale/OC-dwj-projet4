<?php $title = "Modifier le chapitre"; ?>

<?php ob_start(); ?>

<div class="container">
        <div class="row">
            <div class="col mx-auto mt-4 text-center">
                <h3><u>Modifier un chapitre</u></h3>
            </div>
        </div>
</div> 


<form action="index.php?action=editChapter" method="post" class="container">
    <div class="form-group row my-5">
            <div class="col-3">
                <input type="text" class="form-control" name="id" placeholder="Numéro du chapitre" value="<?= htmlspecialchars($post["id"]) ?>">
            </div>
            <div class="col-9">
                <input type="text" class="form-control" name="title" placeholder="Titre du chapitre" value="<?= htmlspecialchars($post["title"]) ?>">
            </div>
    </div>
    

    <div class="form-group">
        <div class="row">
            <div class="col-12 mx-auto">
                <textarea id="basic-example" placeholder="Contenu du chapitre" name="content"><?= $post["content"] ?></textarea>
            </div>
        </div>
        <div class="row col-4 mx-auto">
            <button type="submit" class="btn btn-primary my-4">Enregistrer les modifications</button>
        </div>
        
    </div>
</form>






<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>