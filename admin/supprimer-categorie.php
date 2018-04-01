    <?php
    require('control-session.php');
    ?>
     
    <!-- ici le reste de la page ... HTML ou PHP ... -->



<?php
//On récupère l'id transmit par url pour la placer dans une variable 
$id = $_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />   
<link href="style.css" rel="stylesheet" type="text/css"/>   
<title>Supprimer une cat&eacute;gorie</title> 
</head>   
 
<body>   
<div id="moncadre">  

<?php include('menu.php');?>

<div class="cadrecentrale"> 
<h1>Supprimer cat&eacute;gorie</h1> 
<?php
//On récupère l'identifiant
$id = $_GET["id"];
//on initialise notre formulaire pour pouvoir le masquer
$masquer_formulaire = 0;
// on se connecte à la base de données
include('../connect.php');
 
mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier data_bd.php.');
 
//On vérifie que la catégorie ne comporte aucun article
$result = mysql_query("SELECT id_categorie FROM CONTENU WHERE id_categorie = $id");
if(mysql_num_rows($result) != 0)
{
	echo '<div class="cadre"><p>Cette cat&eacute;gorie comporte actuellement un ou des articles! Il vous est donc impossible de la supprimer.<br/> 	<a href="javascript:history.back()">Retour page pr&eacute;c&eacute;dente</a></p></div>';
	//La catégorie contient quelque chose, alors on masque le formulaire
	$masquer_formulaire=1;
}
//Si l'action de supprimer a été effectué
if(isset($_POST["Supprimer"]))
{
	//On efface la catégorie
	$efface_donnees = mysql_query("DELETE FROM CATEGORIES WHERE id = $id");
 
	//Si il y a une erreur, on crie ^^
	if (!$efface_donnees) {
		die('Requête invalide : ' . mysql_error());
	}
	else {
		//Si tout c'est bien passé, on informe que le message est supprimé
		echo '<div class="cadre"><p>La cat&eacute;gorie à &eacute;t&eacute; supprim&eacute; avec succès. <a href=admin.php>Retour à l\'administration.</a></p></div>';
	}
	//on masque le formulaire pour n'afficher que le message
	$masquer_formulaire=1;
	// On ferme isset($_POST["Supprimer"]))
}
 
//on masque le formulaire en fonction des résultats
if($masquer_formulaire == 0) { 
	?>
 
	<form action="supprimer-categorie.php?id=<?php echo $id;?>" method="post">
	<p><input name="Supprimer" value="Supprimer la cat&eacute;gorie N°<?php echo $id;?>"
	type="submit" /></p>
	</form>
 
	<?php 
	//on ferme la boucle if($masquer_formulaire == 0)
}
?> 
<form action="supprimer-categorie.php?id=<?php echo $id;?>" method="post">
  <p><input name="Supprimer" value="Supprimer la cat&eacute;gorie N°<?php echo $id;?>" 
type="submit" /></p>
</form>

<a href="admin.php"> Retour à l\'administration.</a>
</div>    
</div>   
</body>   
</html>