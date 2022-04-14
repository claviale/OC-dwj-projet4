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
            <button type="button" class="btn btn-primary">Créer un nouveau chapitre</button>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 mb-5">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr class="table-primary align-middle">
                    <th scope="col" class="py-3">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Résumé</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Modifier/Supprimer</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
while ($chapter = $chapters->fetch())
{
    $nbChar = 1000;
    
    if(strlen($chapter["content"]) >= $nbChar) {
    $chapter["content"] = substr($chapter["content"], 0, $nbChar).' [...]';
    }
?>
                    <tr>
                    <th scope="row" class="col-1"><?= htmlspecialchars($chapter["id"]) ?></th>
                    <td class="col-2"><?= htmlspecialchars($chapter["title"]) ?></td>
                    <td  class="col-6"><?= htmlspecialchars($chapter["content"]) ?></td>
                    <td  class="col-1"><?= htmlspecialchars($chapter["creation_date_fr"]) ?></td>
                    <td class="col-2"><button type="button" class="btn btn-outline-primary my-1">Modifier</button></br><button type="button" class="btn btn-outline-primary my-1">Supprimer</button></td>
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