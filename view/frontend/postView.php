<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto">
            <h1>Mon super blog !</h1>
            <p><a href="index.php">Retour à la liste des billets</a></p>

            <div class="news text-justify">
                <h3>
                    <?= htmlspecialchars($post['title']) ?>
                    <em>le <?= $post['creation_date_fr'] ?></em>
                </h3>
                    
                <p>
                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                </p>
            </div>

        </div>
    </div>
</div>     

<div class="container">
    <div class="row">
        <div class=" col-6 mx-auto border border-secondary rounded my-4">
            <h3 class="m-3">Commentaires</h3>

            <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                <div class="form-group col m-3">
                    <label for="author">Auteur</label><br />
                    <input type="text" class="form-control" id="author" name="author" />
                </div>
                <div class="form-group col m-3">
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" class="form-control" name="comment"></textarea>
                </div>
                <div>
                    <input type="submit"  class="btn btn-outline-secondary m-3"/>
                </div>
            </form>
        </div>
    </div>
</div>
  

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
