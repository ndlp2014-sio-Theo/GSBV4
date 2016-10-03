
<html>
<head>
<title> MODELE </title>
</head>

<body>

<?php

function getVisiteur ($login,$mdp){
        
  $connexion = mysqli_connect("localhost","root","", "gsbv2"); 

  if ($connexion) 
  {
    $requete ="select * from visiteur WHERE login=\"$login\" AND mdp=\"$mdp\";";
    $resultat = mysqli_query($connexion, $requete);
    $donnees = mysqli_fetch_assoc($resultat);
  }

  else {

    echo 'Erreur de connexion à la base de données.';
  }

  return $donnees;

}


function getFraisF($mois){

  $connexion = mysqli_connect("localhost","root","","gsbv2");

  if($connexion)
  {
      $requete = 'select * from lignefraisforfait,fraisforfait 
      WHERE lignefraisforfait.idfraisforfait=fraisforfait.id
      WHERE mois="'.$mois.'" 
      AND idVisiteur="'.$_SESSION["id"].'";';

      $resultat = mysql_query($requete,$connexion);
      $ligne = mysql_fetch_assoc($resultat);
  }

  else {

    echo 'Erreur de connexion à la base de données.';
  }

  return $ligne;
}


function getFraisHF(){

  $requete = 'select * from lignefraishorsforfait 
  WHERE mois="'.$_POST["lst_mois"].'" 
  AND idVisiteur="'.$_SESSION["id"].'";';

  $resultat = mysql_query($requete,$connexion);
  $ligne = mysql_fetch_assoc($resultat);

  return $ligne;
}


function getFicheFrais(){

  $requete = 'select * from fichefrais 
  WHERE mois="'.$_POST["lst_mois"].'" 
  AND idVisiteur="'.$_SESSION["id"].'";';

  $resultat = mysql_query($requete,$connexion);
  $ligne = mysql_fetch_assoc($resultat);

  return $ligne;
}

?>

</body>

</html>