<?php include("./cnx.php");
session_start();
if (isset($_SESSION["nikeN"])) {
$nikeN = $_SESSION["nikeN"];
}else {
  header("location:./index.php");
}
?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#152242;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img  class="ms-1" src="./img/logoN.png" width="60" height="42"></a>
    <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="./Adherent_Accueil.php"
                  >Accueil</a
                >
              </li>
            </ul>
            <?php echo "<span class='rounded-pill text-light me-2 ps-2 pe-2'
              >$nikeN"?>
             <?php echo "</span>"?>
            <a class="navbar-brand" href="./Adherent_Profil.php"
              ><img src="./img/profil.jpg" alt="Profil" class="bg-light rounded-circle" width="30" height="30"
            /></a>
            <a class="navbar-brand" href="./Adherent_reservation.php"
              ><img src="./img/reserver.png" alt="Reserver" width="30" height="30" class="bg-light rounded-circle border border-2 border-dark"
            /></a>
            <a class="navbar-brand" href="./Adherent_deconnecter.php"
              ><img src="./img/eteindre.png" alt="Eteindre" class="bg-light rounded-circle" width="30" height="30"
            /></a>
          </div>
        </div>
      </nav>
      