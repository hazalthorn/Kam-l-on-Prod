    <?php
    require('control-session.php');
    ?>
     
    <!-- ici le reste de la page ... HTML ou PHP ... -->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr">
 
<head>
 
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css"/>
<title>Supprimer un article</title>
</head>
 
<body>
 
<div id="moncadre">

<?php include('menu.php');?>
 
<div class="cadrecentrale">
<h1>Supprimer un article</h1>
 
<?php
//On récupère l'ide transmit par l'url
$id = $_GET["id"];
//On initialise le masquage du formulaire
$masquer_formulaire = 0;
// on se connecte à la base de données
include('../connect.php');
 
mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier data_bd.php.');
 
echo '<div class="cadre"><p>Attention : vous êtes sur le point de supprimer cette article!!</p></div>';
 
if(isset($_POST["Supprimer"]))
{
	//On efface l'article
	$efface_donnees = mysql_query("DELETE FROM CONTENU WHERE id = $id");
 
	//Si il y a une erreur, on crie ^^
	if (!$efface_donnees) {
		die('Requête invalide : ' . mysql_error());
	}
	else {
		//on informe que l'article est supprimé
		echo '<div class="cadre"><p>L\'article à &eacute;t&eacute; supprim&eacute; avec succès. <a href=admin.php>Retour à l\'administration.</a></p></div>';
		//On ferme else
	}
	//on masque le formulaire
	$masquer_formulaire=1;
	// On ferme isset($_POST["Supprimer"]))
}
//on masque le formulaire si tout est ok
if($masquer_formulaire == 0) 
{ 
	?>
 
	<form action="supprimer-article.php?id=<?php echo $id;?>" method="post">
	<p><input name="Supprimer" value="Supprimer l'article N°<?php echo $id;?>" type="submit" /></p>
	</form>
 
	<?php
	//Fin du masquage du formulaire
}
?>
 
</div>

 <a href="admin.php"> Retour à l\'administration.</a>
 
 
</div>
 
</body>
 
</html>