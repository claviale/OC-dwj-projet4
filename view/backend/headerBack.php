 <!-- HEADER NAVBAR -->
 <header>
    <div class="bg-light static-top">
        <div class="container">
            <div class="row ">
                <nav class="navbar navbar-expand-lg my-2">
                    <a class="navbar-brand ms-sm-2" href="index.php">
                        <div><small>Retourner au blog </div></small>       
                    </a>
                    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto">
                        <li class="nav-item active mx-sm-4 ">
                                <a class="nav-link" href="index.php?action=administration">Accueil</a>
                            </li>    
                            <li class="nav-item active mx-sm-4 ">
                                <a class="nav-link" href="index.php?action=chaptersView">Chapitres</a>
                            </li>
                            <li class="nav-item mx-sm-4">
                                <a class="nav-link" href="">Commentaires</a>
                            </li>
                        </ul>
                        
                        <div>
                            <?php 
                            if (isset($_SESSION["LOGGED_USER"])) {
                                ?> 
                                    <a href="index.php?action=logout">Déconnexion</a>
                                <?php } else { ?>
                                    <a href="index.php?action=adminAccess">Se connecter</a>
                                <?php }?>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>