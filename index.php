<html>
    <head>
        <meta charset="utf-8">

        <title>INDEX</title>
    </head>

<body>

<?php

		
Require 'D:\wamp\www\SiteMVC\Controleur\ControleurAccueil.php';	

if (!(session_id())){
	session_start();
}

	
if (isset($_POST['id'])){

	$_SESSION['id']=$_POST['id'];
	$_SESSION['identifier']=true;
	connexionLogin();
}


//Si pas encore de connexion utilisateur, redirection vers la page d'accueil
	if(!isset($_SESSION['identifier'])){
		Require 'D:\wamp\www\SiteMVC\Vues\vueAccueil.html';

	}

	if (isset($_POST['button'])){
		Require 'D:\wamp\www\SiteMVC\Vues\vueAttente.php';
	}

	if (isset($_POST['saisie'])){
		Require 'D:\wamp\www\SiteMVC\Controleur\ControleurSaisie.php';
	}

	if (isset($_POST['affichage'])){
		Require 'D:\wamp\www\SiteMVC\Controleur\ControleurAffichage.php';
	}

	if (isset($_POST['deco'])){
		session_destroy();
	}
	

?>

</body>
</html>