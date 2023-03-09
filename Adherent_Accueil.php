<?php include("./cnx.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="./javascript.js"></script>
    <title>Accueil</title>
</head>
<body>
    <header>
        <?php include("./Adherent_navbar.php")?>
        <div class="d-flex justify-content-center align-items-center flex-wrap" style="background-color:#DBBB68;" >
        <!-- Search Form -->
        <form method="POST" class="w-100  m-1">
            <!-- Div For flex -->
            <div class="d-flex flex-wrap justify-content-center align-items-center mx-1 w-100">
            <!-- rechercher -->
            <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 m-1">
                <input type="text" class="form-control w-100" name="ville" placeholder="Rechercher" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Type -->
            <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                <select class="form-select w-100" name="type" aria-label=".form-select example">
                <option value="tout_type">Tout Type :</option>
                <option value="Roman">Roman</option>
                <option value="Memoire de recherche">Memoire de recherche</option>
                <option value="Magazine">Magazine</option>
                <option value="DVD">DVD</option>
                </select>
            </div>
            <!-- categorie -->
            <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                <select class="form-select w-100" name="type" aria-label=".form-select example">
                <option value="tout_categorie">Tout categorie :</option>
                <option value="Titre">Titre</option>
                <option value="Nom de auteur">Nom de auteur</option>
                <option value="Nom de auteur">Date d'adition</option>
                <option value="Nom de auteur">Nombres de pages</option>
                </select>
            </div>
            <div class="form-group col-6 col-md-2 col-lg-2 m-3">
                <button name="submit_search" type="submit" class="btn rounded-4 btn-lg  w-100 text-light" style="background-color:#152242;">Rechercher</button>
      </div>



    </header>
    <main>
      <div class='cards d-flex  align-items-center justify-content-around flex-wrap'>
        
        <?php include("./Adherent_carte.php")?>
      </div>
    </main>
</body>
</html>