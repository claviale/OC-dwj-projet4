<h1>BACKEND</h1>

<p>Bonjour <?php echo $_SESSION['LOGGED_USER'];?> ! </p>

<?php 
    if (isset($_SESSION["LOGGED_USER"])) {
        echo '<a href="index.php?action=logout" class="text-white">Déconnexion de ' . $_SESSION["LOGGED_USER"];' </a>';
        } else {
            echo "<a href='index.php?action=adminAccess' class='text-white'>Se connecter</a>";
        }
?>
