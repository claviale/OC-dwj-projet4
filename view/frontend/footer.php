<footer class="footer py-4 mt-5 text-white "> 
   <div class="container">
        <div class="row">
            <div class="col text-center my-auto">
                <h6>Contact :</h6>
                <ul class="social">
                    <li><a href="mailto:billetalaska@jeanforteroche.com" class="text-white">E-mail</a></li>
                    <li><a href="facebook.com" class="text-white">Facebook</a></li>
                </ul>
            </div>
            <div class="col text-center my-auto">
                <h6>Accès administrateur :</h6>
                
        <?php 
          if (isset($_SESSION["LOGGED_USER"])) {
            echo '<a href="index.php?action=administration" class="text-white">Bonjour ' . $_SESSION["LOGGED_USER"];' </a>';
          } else {
            echo "<a href='index.php?action=adminAccess' class='text-white'>Se connecter</a>";
          }
        ?>

            </div>
        </div>
    </div>
</footer>