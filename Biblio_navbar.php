<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#152242;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img  class="ms-1" src="./img/logoN.png" width="60" height="42">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="./Biblio_Accueil.php">Accueil</a>
                </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ouvrages
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./Biblio_Ouvrage_Ajouter.php">Ajouter</a></li>
            <li><a class="dropdown-item" href="./Biblio_Ouvrage_MiseJ.php">Mise à jour</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Emprunt
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./Biblio_Emprunt_Ajouter.php">Ajouter</a></li>
            <li><a class="dropdown-item" href="./Biblio_Emprunt_MiseJour.php">Mise à jour</a></li>
          </ul>
        </li>
            </ul>
            <form class="d-flex">
                <a class="navbar-brand" href="./Biblio_deconnecter.php"
              ><img src="./img/eteindre.png" alt="Eteindre" class="bg-light rounded-circle" width="30" height="30"
            /></a>
            </form>
        </div>
    </div>
</nav>

