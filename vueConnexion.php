<!DCOTYPE html>
<html>
    <head>
		<link href="pageaccueil.css" rel="stylesheet">
		<link href="vueAccueil.html" rel="stylesheet">

        <meta charset="utf-8">
        <title> Page d'attente</title>
    </head>
    <body>
    	 <header>
  		<img src="logo-gsb4.png">

 </header>

<?php while($donnees) ?>  
{
	<?php if($_POST["id"] == $donnees["login"] && $_POST["mdp"] == $donnees["mdp"]) ?>
	{
		<?php $boolean=true; ?>

		<?php if (!session_id()) ?>
		{
			<?php session_start(); ?>
		}
		
		<?php $_SESSION["id"]=$_POST["id"]; ?>

		<?php $_SESSION["prenom"] = $donnees["prenom"]; ?>
		<?php $_SESSION["nom"] = $donnees["nom"]; ?>
		<?php $_SESSION["adresse"] = $donnees["adresse"]; ?>
		<?php $_SESSION["cp"] = $donnees["cp"]; ?>
		<?php $_SESSION["ville"] = $donnees["ville"]; ?>
		<?php $_SESSION["embauche"] = $donnees["embauche"]; ?>
		<?php $_SESSION["id_visiteur"] = $donnees["id"]; ?>


	}
	   
	<?php $donnees = mysqli_fetch_assoc($resultat);	?>
}

<?php if($boolean==true) ?>
{
	<div class="sign-up">
	<form action="pagedattende.php" method="get">
		
	Bienvenue <?php $_SESSION["prenom"] ?> Vous êtes bien connecté en tant que "Visiteur / Comptable.     

	<input class="sign-up-button" type="submit"  value="Suivant">

	</form>
	</div>
}
	
<?php else ?>
{
	<div class="sign-up">
	Mot de passe ou login incorrect, veuillez réessayer
	<form action="index.php" method="post">
	<td><input class="sign-up-button" type="submit" value="Réessayer" /></td>
	</div>
}

</body>
</html>