<html>
<head>
<title>Fiche de frais  |  GSB</title>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href=".\vues\style\affichageFrais.css" rel="stylesheet">
	<script type="text/javascript"></script>
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
<form name="affichageFrais" class="sign-up" action="#" method="POST">


		<SELECT name="lst_mois"  class="sign-up-input">
		<option value="0" disabled selected> Choix du mois </option>
		<option value="1">Janvier</option>
		<option value="2">Février</option>
		<option value="3">Mars</option>
		<option value="4">Avril</option>
		<option value="5">Mai</option>
		<option value="6">Juin</option>
		<option value="7">Juillet</option>
		<option value="8">Aout</option>
		<option value="9">Septembre</option>
		<option value="10">Octobre</option>
		<option value="11">Novembre</option>
		<option value="12">Décembre</option>
	</select>

</form>


<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>

<table>

<? $mois=$_POST["lst_mois"] ?>
<?php $ligne=getFraisF($mois) ?>

<?php while($ligne) ?>
{
  <tr><td> <?php echo $ligne['Libelle'].' : '.$ligne['quantite'] ?> </td></tr>
}

</table>

________________________________________________________________________________________________________________

<table>

<?php while($ligne) ?>
{
  <tr><td> <?php echo   $ligne['libelle'].' - '.$ligne['dateHF'].' - '.$ligne['montant'] ?> </td></tr>
}

</table>

________________________________________________________________________________________________________________

<table>
<tr><th>

  <div class="sign-up-text">
    Date :
  </div>

  <div class="sign-up-text">
    Frais forfaitaire :
  </div>

<div class="sign-up-text">
      Forfait étape :
    </div>

<div class="sign-up-text">
    Frais kilométrique :
</div>

      <div class="sign-up-text">
    Nuitée hotel :
  </div>

<div class="sign-up-text">
Repas restaurant :
</div>

<div class="sign-up-text">
      Hors forfait :
    </div>

<div class="sign-up-text">
      Libellé :
    </div>
<div class="sign-up-text">
          Prix :
        </div>
</th></tr>

<?php while($ligne) ?>
{
  <tr><td> <?php echo $ligne['mois'] ?> </td></tr>
}


</table>


<input type="button" class="sign-up-button" value="Retour" onClick="history.back()">

</div>
</body>
</html>
