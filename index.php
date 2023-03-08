<?php include("./cnx.php"); 

session_start();
$PassVerf ="";
$surnomVerf = "";
if (isset($_POST["connecter"])) {
    $surnom = $_POST["surnom"];
    $password = $_POST["pass"];

        $Rsurnom = "SELECT * FROM Adherent WHERE  Surnom_ad = '$surnom'";
        $RPassword = "SELECT * FROM Adherent WHERE Password = '$password'";

        $RsultAdherentS = $cnx->prepare($Rsurnom);
        $RsultAdherentS->execute();

        $RsultAdherentP = $cnx->prepare($RPassword);
        $RsultAdherentP->execute();

        $ligneS = $RsultAdherentS->fetch(PDO::FETCH_ASSOC);
        $ligneP = $RsultAdherentP->fetch(PDO::FETCH_ASSOC);

    if (empty($surnom)) {
        $surnomVerf = "Veuillez saisir votre surnom";
    }elseif (empty($password)) {
        $PassVerf = "Veuillez saisir votre mot de passe";
    }elseif (!$ligneS) {
            $surnomVerf = "le surnom saisi est un incorrect";
        }elseif (!$ligneP && !password_verify($password, $ligneS["Password"])) {
            $PassVerf = "Mot de passe saisi est un incorrect";
        }else{
            $_SESSION["Id"]= $ligneS["Id_ad"];
            header("Location:./AccueilAd.php");     
        }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Adhérent</title>
</head>
<body>
<nav class="navbar" style="background-color:#152242;">
<a class="navbar-brand " href="#"><img  class="ms-1" src="./img/logoN.png" width="60" height="42"></a>
</nav>
    <div class='container-fluid'>
        <div class='row d-flex mt-5 justify-content-center'>
            <!-- <h3 class="text-center">D</h3> -->
<form method='post' class='border border-2 rounded text-center w-auto'>
                       
                       <div class='form-group m-2 ms-1 '>
                               <input type='text' placeholder='Surnom' name='surnom' class='rounded-pill border-1 form-control'>
                               <?php echo "<span class='text-danger'>". $surnomVerf; echo "</span>" ?>
                            </div>
                           <div class='form-group m-2 ms-1 '>
                               <input type='password' placeholder='Mot de passe' name='pass' class='rounded-pill border-1 form-control'>
                               <?php echo "<span class='text-danger'>". $PassVerf; echo "</span>" ?>
                            </div>
                           <div class='form-group m-2 ms-1 '>
                               <button type='submit' class='btn rounded-pill border-1 text-light' style="background-color:#DBBB68;" name="connecter">connecter</button>
                               <a href='./S_inscrire.php'>S'inscrire</a>
                           </div>
           </form>
</div>

</div>
</body>
</html>