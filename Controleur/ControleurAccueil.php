<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="vues\style\pageaccueil.css">
	

        <title>CONTROLEUR ACCUEIL</title>
    </head>

<body>

<?php

Require '.\Modele\modele.php';


function connexionLogin(){
	
	if(isset($_POST["id"])){
		$_SESSION["id"]=$_POST["id"];	
	}
	else{
		Require 'D:\wamp\www\SiteMVC\Vues\vueAccueil.html';
	}

	if(isset($_POST["mdp"])){
		$_SESSION["mdp"]=$_POST["mdp"];
	}
	else{
		Require 'D:\wamp\www\SiteMVC\Vues\vueAccueil.html';
	}

	
	$donnees = getVisiteur($_SESSION["id"],$_SESSION["mdp"]);
	if ($donnees){
	

		$_SESSION["prenom"] = $donnees["prenom"]; 
		$_SESSION["nom"] = $donnees["nom"]; 
		$_SESSION["adresse"] = $donnees["adresse"]; 
		$_SESSION["cp"] = $donnees["cp"]; 
		$_SESSION["ville"] = $donnees["ville"];
		$_SESSION["embauche"] = $donnees["embauche"]; 
		$_SESSION["id_visiteur"] = $donnees["id"]; 
		Require 'D:\wamp\www\SiteMVC\Vues\vueConnexion.php';
	
	}
	else {
		$message='Identifiant ou mot de passe incorect, veuillez saisir à nouveau.';
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
		Require 'D:\wamp\www\SiteMVC\Vues\vueAccueil.html';
	}
}



?>

</body>
</html>