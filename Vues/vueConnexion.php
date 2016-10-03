
<html>
    <head>
		<link href="D:\wamp\www\SiteMVC\Vues\vueAccueil.html" rel="stylesheet">

        <meta charset="utf-8">
        <title> Page d'attente </title>
    </head>
    
    <header>
  		<img src=".\vues\style\logo-gsb4.png">
 	</header>

    <body>



	<div class="sign-up">
	<form  method="post">
		
	Bienvenue <?php 
	echo $_SESSION["prenom"] ;
	echo "<br/>";
	?> Vous êtes bien connecté en tant que visiteur.     

	<input name="button" class="sign-up-button" type="submit"  value="Suivant">
	</div>
	</form>
	

</body>
</html>