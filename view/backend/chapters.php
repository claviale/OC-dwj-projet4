<?php $title = "Gestion des chapitres"; ?>

<?php ob_start(); ?>

<div class="container">
        <div class="row">
            <div class="col mx-auto mt-4 text-center">
                <h3><u>Gestion des chapitres</u></h3>
            </div>
        </div>
</div> 

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5 mt-2 text-end">
            <a href="index.php?action=newChapterView"><button type="button" class="btn btn-primary">Créer un nouveau chapitre</button></a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 mb-5 table-responsive-md">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr class="table-primary align-middle">
                    <th scope="col" class="py-3">Titre</th>
                    <th scope="col">Résumé</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
while ($chapter = $chapters->fetch())
{
    $nbChar = 700;
    
    if(strlen($chapter["content"]) >= $nbChar) {
    $chapter["content"] = substr($chapter["content"], 0, $nbChar).' [...]';
    }
?>
                    <tr>
                    <td scope="row" class="col-sm-2 col-1"><?= htmlspecialchars($chapter["title"])?></td>
                    <td  class="col-sm-7 col-8"><?= $chapter["content"] ?></td>
                    <td  class="col-1"><?= $chapter["creation_date_fr"]?></td>

                    <td class="col-1"><a href="index.php?action=editChapterView&amp;id=<?=$chapter['id']?>"><button type="button" class="btn btn-outline-primary my-1">Modifier</button></a></td>

                    <td class="col-1">
                        <button type="button" class="btn btn-outline-primary my-1" data-bs-toggle="modal" data-bs-target="#deleteChapter<?=$chapter['id']?>">Supprimer</button>

                        <div class="modal fade" id="deleteChapter<?=$chapter['id']?>" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteChapterTitle">Supprimer le chapitre</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        Voulez-vous vraiment supprimer le chapitre intitulé "<?=$chapter['title']?>" et les commentaires associés ?
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <a href="index.php?action=deleteChapter&amp;id=<?=$chapter['id']?>" ><button type="button" class="btn btn-primary">Valider la suppression</button></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>            
                    
<?php
}
$chapters->closeCursor();
?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>