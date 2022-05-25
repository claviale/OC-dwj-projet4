<?php $title = "Gestion des commentaires"; ?>

<?php ob_start(); ?>

<div class="container">
        <div class="row">
            <div class="col mx-auto mt-4 text-center">
                <h3><u>Gestion des commentaires</u></h3>
            </div>
        </div>
</div> 


<div class="container">
    <div class="row">
        <div class="col-12 mb-5">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr class="table-primary align-middle">
                    <th scope="col" class="py-3">Titre du chapitre</th>
                    <th scope="col">Auteur du commentaire</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Date</th>
                    <th scope="col">Signalements</th>
                    <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
while ($comment = $comments->fetch())
{
    if (($comment["report"]) == 0){
        $color = "green";
    }else if (($comment["report"]) >= 1 && ($comment["report"]) <= 5) { 
            $color = "orange";}
            else{ $color = "red";}
    
?>
                    <tr>
                    <td class="col-2"><?= htmlspecialchars($comment["title"])?></td>
                    <td class="col-1"><?= htmlspecialchars($comment["author"])?></td>
                    <td  class="col-6"><?= nl2br(htmlspecialchars($comment["comment"]))?></td>
                    <td  class="col-1"><?= htmlspecialchars($comment["comment_date_fr"])?></td>

                    <td class="col-1" style="color: <?= $color;?>"><b><?= $comment["report"]?></b></td>

                    <td class="col-1">
                        <button type="button" class="btn btn-outline-primary my-1" data-bs-toggle="modal" data-bs-target="#deleteComment<?=$comment['id']?>">Supprimer</button>

                        <div class="modal fade" id="deleteComment<?=$comment['id']?>" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteCommentTitle">Supprimer le commentaire</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        Voulez vous supprimer ce commentaire ?
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <a href="index.php?action=deleteComment&amp;id=<?=$comment['id']?>" ><button type="button" class="btn btn-primary">Valider la suppression</button></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>            
                    
<?php
}
$comments->closeCursor();
?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("templateBack.php"); ?>