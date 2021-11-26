<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="chapitres col-10 mx-auto">
            <h1>Billet simple pour l'Alaska !</h1>
            <p>Derniers chapitres:</p>
        </div>
    </div>
</div>  


<?php
while ($data = $posts->fetch())
{
?>
    <div class="container">
        <div class="row">
            <div class="news col-10 mx-auto">
                <h3>
                    <?= htmlspecialchars($data['title']) ?>
                    <em>le <?= $data['creation_date_fr'] ?></em>
                </h3>
                
                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />
                    <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
                </p>
            </div>
        </div>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

