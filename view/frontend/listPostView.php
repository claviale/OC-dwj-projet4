<?php $title = "Les chapitres"; ?>

<?php ob_start(); ?>

<section class="titles">
    <div class="container">
        <div class="row bg-img">
            <div class="col-10 mx-auto description">
                <h1>Billet simple pour l'Alaska</h1>
                <h4>Tous les chapitres</h4>
            </div>
        </div>
    </div> 
</section>


<?php
while ($data = $posts->fetch())
{
    $nbChar = 1500;
    
    if(strlen($data["content"]) >= $nbChar) {
    $data["content"] = substr($data["content"], 0, $nbChar).' [...]';
    }
?>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="news col-9 mx-auto">
                <h3>
                    <?= htmlspecialchars($data["title"]) ?>
                    <em>le <?= $data["creation_date_fr"] ?></em>
                </h3>
                
                <p><?= nl2br($data["content"])?></p>
                    
                <a href="index.php?action=post&amp;id=<?= $data["id"] ?>">Lire le chapitre</a>
                
            </div>
        </div>
    </div>
</section>

<?php
}
$posts->closeCursor();
?>

<?php $content = ob_get_clean (); ?>

<?php require("template.php"); ?>

