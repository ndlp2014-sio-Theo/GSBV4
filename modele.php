
<html>

<head>
<title> MODELE </title>
</head>

<body>

<?php

function getVisiteur (){

  $connexion = mysqli_connect("localhost","root","", "gsbv2"); 
        
  if ($connexion) 
  {

    $requete ="select * from visiteur;";
    $resultat = mysqli_query($connexion, $requete);
    $donnees = mysqli_fetch_assoc($resultat);
    $boolean=false;
  }

  else {

    echo 'Erreur de connexion à la base de données.';
  }

}


function getFraisF(){

    $connexion = mysqli_connect("localhost","root","","gsbv2");

    $requete = 'select * from lignefraisforfait,fraisforfait 
    WHERE lignefraisforfait.idfraisforfait=fraisforfait.id
    WHERE mois="'.$_POST["lst_mois"].'" 
    AND idVisiteur="'.$_SESSION["id"].'";';

    $resultat = mysql_query($requete,$connexion);
    return $resultat;
}


function getFraisHF(){

    $connexion = mysqli_connect("localhost","root","","gsbv2");

    $requete = 'select * from lignefraishorsforfait 
    WHERE mois="'.$_POST["lst_mois"].'" 
    AND idVisiteur="'.$_SESSION["id"].'";';

    $resultat = mysql_query($requete,$connexion);
    return $resultat;
}


function getFicheFrais(){

  $connexion = mysqli_connect("localhost","root","","gsbv2");

  $requete = 'select * from fichefrais 
  WHERE mois="'.$_POST["lst_mois"].'" 
  AND idVisiteur="'.$_SESSION["id"].'";';

  $resultat = mysql_query($requete,$connexion);
  return $resultat;
}

?>

</body>

</html>