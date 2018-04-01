<?php
//On récupère la variable transmit par l'url
$id_transmit=$_GET['id'];
if (!isset($_GET["id"]) OR !is_numeric($_GET['id'])){
//Si la variable n'existe pas ou qu'elle n'est pas de type numérique, on redirige
	header('location:http://'.$_SERVER['HTTP_HOST'].'');
}
else{
	// on se connecte à la base de données
	include('connect.php');
	mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
	mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
 
	$page = mysql_query("SELECT * FROM CONTENU WHERE id='".mysql_real_escape_string
($id_transmit)."'");
	//on voie si il y a quelque chose
	if(mysql_num_rows($page) == 0)
	{
		//Si il n'y a rien, on redirige vers l'index
		header('location:http://'.$_SERVER['HTTP_HOST'].'');
	}
	else
	{
		while($affiche = mysql_fetch_array($page))
		{
			$titre=$affiche['titre'];
			$description=$affiche['description'];
			$contenu=$affiche['texte'];
		}
	//On ferme else
	}
}
?>

<?php echo $contenu;?>