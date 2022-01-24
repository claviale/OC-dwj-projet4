<?php $title = "Biographie"; ?>

<?php ob_start(); ?>

<section class="titles">
    <div class="container">
        <div class="row bg-img">
            <div class="col-10 mx-auto description">
                <h1>Billet simple pour l'Alaska</h1>
                <h4>Qui suis-je?</h4>
            </div>
        </div>
    </div> 
</section>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 col-sm-12">
            <img src="public/images/Kerouac.jpg" class="img-fluid mx-auto d-block" alt="Ecrivain"> 
        </div>
        <div class="col-md-6 col-sm-12 my-5">
            <p>Extrait du New York Times :</p>
            <p>"On ne le présente plus, et pourtant, Jean Forteroche fait partie des auteurs français les plus connus de notre époque ! </br>
            Depuis l’an 2000, ses romans séduisent de nombreux lecteurs, grâce à des personnages attachants, à des intrigues captivantes, et à des ressorts tous plus cinématographiques les uns que les autres. </br>
            Un écrivain du divertissement et des sentiments, qui placent au cœur de son écriture les bons sentiments et la sensation qu’une bonne histoire est d’abord une histoire qui nous emporte loin, très loin !"</p>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>