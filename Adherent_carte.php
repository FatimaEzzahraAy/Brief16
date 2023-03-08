<?php
include("./cnx.php");
session_start();

   $ouvrage = "SELECT * FROM ouvrage";
   $ouvrageReslt = $cnx->prepare($ouvrage);
   $ouvrageReslt->execute();

   while ($ligneO = $ouvrageReslt->fetch(PDO::FETCH_ASSOC)) {
    echo
   "<div class='p-3 m-0 border-0 bd-example'>   
        <div class='card text-bg-dark'>
        <img src='https://www.actusf.com/files/images/articles/content/1984.png' class='card-img' width='100%' >
        <div class='card-img-overlay'>
            <button class='btn btn-primary '>Reserver</button>
        </div>
    </div>";
   }
  

?>