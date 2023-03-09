<?php
    include("./cnx.php");

   $ouvrage = "SELECT * FROM ouvrage GROUP BY ouvrage.Titre ORDER BY ouvrage.Id_ouv";
   $ouvrageReslt = $cnx->prepare($ouvrage);
   $ouvrageReslt->execute();

   $ouvrageRes = "SELECT * FROM ouvrage JOIN reservation ON ouvrage.Id_ouv = reservation.Id_ouv";
   $ouvrageResReslt = $cnx->prepare($ouvrageRes);
   $ouvrageResReslt->execute();

   while ($ligneOR = $ouvrageResReslt->fetch(PDO::FETCH_ASSOC)) {
    echo
    "<div class='row'>
        <div class='col-sm-6 mb-3 mb-sm-0'>
            <div class='card  col-xs-12  col-md-5  col-xl-3 my-5 ' style='width:350px;height:fit-content)'>
                <img style='height: 450px;' src='./img/$ligneOR[Img_couv]'  alt='$ligneOR[Img_couv]' class='card-img h- w-100' >
                <div class='card-body'>
                    <h5 style='height: 80px' class='card-title'>$ligneOR[Titre]</h5>
                    <a href='#' class='btn btn-secondary pe-none'>Rerserver</a>
                    <a href='#' class='btn btn-danger'>Pannier</a>
                </div>
            </div>
        </div>
    </div>  ";
    while ($ligneO = $ouvrageReslt->fetch(PDO::FETCH_ASSOC) ) {
        
        echo
            "<div class='row'>
                <div class='col-sm-6 mb-3 mb-sm-0'>
                    <div class='card  col-xs-12  col-md-5  col-xl-3 my-5 ' style='width:350px;height:fit-content)'>
                        <img style='height: 450px;' src='./img/$ligneO[Img_couv]'  alt='$ligneO[Img_couv]' class='card-img h- w-100' >
                        <div class='card-body'>
                            <h5 style='height: 80px' class='card-title'>$ligneO[Titre]</h5>
                            <button class='btn btn-danger' name='reserver' value=$ligneO[Id_ouv]>Rerserver</button>
                            <a href='#' class='btn btn-danger'>Pannier</a>
                        </div>
                    </div>
                </div>
            </div>  ";
   }
}
?>