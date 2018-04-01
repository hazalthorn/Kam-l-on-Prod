    <?php
    require('control-session.php');
    ?>
     
    <!-- ici le reste de la page ... HTML ou PHP ... -->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr">
 
<head>
 
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../ckeditor/ckeditor/ckeditor.js"></script> 
<title>Ajouter un article</title>
</head>
 
<body>
 
<div id="moncadre">

<?php include('menu.php');?>

<div class="cadrecentrale">
<h1>Ajouter un article</h1>
<?php 
// on se connecte à la base de données
include('../connect.php');
 
mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
 
//Traitement du formulaire
if(isset($_POST["Valider"]))
{
	$titre = htmlspecialchars(stripcslashes(trim($_POST["titre"])));
	$description = htmlspecialchars(stripcslashes($_POST["description"]));
	$contenu = stripcslashes($_POST["contenu"]);
	$categorie = $_POST["cat"];
 
	//Vérification du formulaire
	if(empty($titre)){
		$alerte0 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas saisie de titre.</div>';
	}
	else if(empty($description)){
		$alerte1 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas saisie de description.</div>';
	}
	else if(empty($contenu)){
		$alerte2 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas saisie de contenu.</div>';
	}
	else if(empty($categorie)){
		$alerte3 ='<div class="erreur"><a name="ok"></a>Vous n\'avez pas sélectionné de catégorie.</div>';
	}
	//Si tout est ok
	else
	{ 
		// on enregistre les données
		$result = mysql_query("INSERT INTO CONTENU VALUES ( '', '".mysql_real_escape_string($categorie)."', '".mysql_real_escape_string($titre)."', '".mysql_real_escape_string($description)."', '".mysql_real_escape_string($contenu)."' ) ");
		//Si il y a une erreur, on crie ^^
		if (!$result) {
			die('Requête invalide : ' . mysql_error());
		}
		else{
			//Si tout est ok, on informe le webmaster
			$message_ok = '<div class="erreur"><a name="ok"></a><b>Page enregistr&eacute;e avec succ&egrave;s!</b></div>';
		}
		//On ferme else
	}
	//On ferme if(isset($_POST["Valider"]))
}	
?>
<?php 
if(isset($message_ok))
{
echo $message_ok;
}
?>
<form action="#ok" method="post">
<?php 
if(isset($alerte0))
{
echo $alerte0;
}
?>
<p>Titre de la page :<br/>
<input name="titre" size="65" value="<?php if (!empty($_POST["titre"])) { echo stripcslashes(htmlspecialchars($_POST["titre"],ENT_QUOTES)); } ?>" type="text"/>
</p>
<?php 
if(isset($alerte1))
{
echo $alerte1;
}
?>
<p>Description de la page :<br/>
<textarea name="description" rows="10" cols="50" ><?php
if (!empty($_POST["description"])) {
	echo stripcslashes(htmlspecialchars($_POST["description"],ENT_QUOTES));
}
?></textarea>
</p>
<?php 
if(isset($alerte2))
{
echo $alerte2;
}
?>
<p>Contenu de la page :<br/>
<textarea name="contenu" rows="10" cols="50" ><?php
if (!empty($_POST["contenu"])) {
	echo stripcslashes(htmlspecialchars($_POST["contenu"],ENT_QUOTES));
}
?></textarea>
<script type="text/javascript">
CKEDITOR.replace( 'contenu' );
</script>
 
</p>
<?php 
if(isset($alerte3))
{
echo $alerte3;
}
?>
<p>Catégorie :<br/>
<select name="cat">
<option value="">Selectionnez une catégorie</option>
<?php
//On selectionne les données
$categorie = mysql_query("SELECT id,nom_categorie FROM CATEGORIES ORDER BY id ASC");
 
while($affiche = mysql_fetch_array($categorie))
{
	echo '<option value="'.$affiche['id'].'">'.$affiche['nom_categorie'].'</option>';
}	
?>
</select>
</p>
<p>
<input name="Valider" value="Valider" type="submit"/>
<input name="Effacer" value="Effacer" type="reset"/>
</p>
</form>
 
</div>
 
 <a href="admin.php"> Retour à l\'administration.</a>
 
 
</div>
 
</body>
 
</html>