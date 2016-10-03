
<html>
<head>
    <title>Page d'attente | GSB</title>

     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href=".\vues\style\pagedattende.css" rel="stylesheet">
    <link href="D:\wamp\www\SiteMVC\Vues\vueAccueil.html" rel="stylsheet">
</head>

 <header>
  <img src=".\vues\style\logo-gsb4.png"></a>

   <ul>
       	 <li>
       	 	<form  method="post"><input name="deco" class="button-deco" type="submit"  value="Deconnexion"></form>
       	 </li>
   </ul>
 </header>

<body>

<div class="sign-up">

<h1> Profil visiteur :</h1>
<h2> <?php echo $_SESSION["nom"]." ".$_SESSION["prenom"]; ?> </h2>
<h3> <?php echo $_SESSION["adresse"]." ".$_SESSION["cp"]." ".$_SESSION["ville"]; ?> </h3>
<h3> Embauché le <?php echo $_SESSION["embauche"]; ?> </h3>

<form  method="post">
<div class="button-base">
<input name="saisie" class="button-base" type="submit"  value="Ajout frais">
<input name="affichage" class="button-base" type="submit"  value="Afficher frais">
</div>
</form>


</div>
          


</body>

</html>
