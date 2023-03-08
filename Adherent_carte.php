<?php
include("./cnx.php");

   $ouvrage = "SELECT * FROM ouvrage LEFT JOIN reservation ON ouvrage.Id_ouv = reservation.Id_ouv WHERE reservation.Id_ouv IS NULL GROUP BY ouvrage.Titre ORDER BY ouvrage.Id_ouv LIMIT 0, 25";
   $ouvrageReslt = $cnx->prepare($ouvrage);
   $ouvrageReslt->execute();

   while ($ligneO = $ouvrageReslt->fetch(PDO::FETCH_ASSOC)) {
    echo
   "    <div class='row'>
            <div class='col-sm-6 mb-3 mb-sm-0'>
                <div class='card  col-xs-12  col-md-5  col-xl-3 my-5 ' style='width:350px;hight:350px'>
                    <img src='./img/$ligneO[Img_couv]'  alt='$ligneO[Img_couv]' class='card-img'>
                        <div class='card-body'>
                            <h5 class='card-title'>$ligneO[Titre]</h5>
                            <a href='#' class='btn btn-primary'>Reserver</a>
                        </div>
                </div>
            </div>
        </div>";
   }

  
?>