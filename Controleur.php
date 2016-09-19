<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="pageaccueil.css">
        <title>CONTROLEUR</title>
    </head>

<body>

<?php

Require 'D:\wamp\www\Scripts\Site SLAM MVC\modele.php';

function accueil() {

$visiteurs = getVisiteur();
require 'vueConnexion.php';
}

/*function () {

$ = ();
require '';
}*/



?>

</body>
</html>