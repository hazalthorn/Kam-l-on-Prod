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
<title>Voir une cat&eacute;gorie</title> 
</head>   
 
<body>   
<div id="moncadre">  

<?php include('menu.php');?>

<div class="cadrecentrale"> 
<h1>Voir cat&eacute;gorie</h1> 
<?php
//on récupère l'identifiant depuis l'url
$id=$_GET['id'];
 
echo '<h1>Cat&eacute;gorie '.$id.'</h1>';
 
// on se connecte à la base de données
include('../connect.php');
 
mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
 
//On selectionne les données
$result = mysql_query("SELECT id,id_categorie,titre FROM CONTENU WHERE id_categorie='$id'  ORDER BY id ASC");
 
//on voit si il y a quelque chose
if(mysql_num_rows($result) == 0)
{
echo '<div class="cadre"><p>Aucun article pour le moment!</p></div>';
}
//Si la table contient des articles, on affiche les données
else {
echo '<table style="width: 100%;" cellpadding="2" cellspacing="2">  <tbody>   <tr>    <td class="hauttd">Article</td>    <td class="hauttd">Modifier</td>    <td class="hauttd">Supprimer</td>   </tr>';
 
while($affiche = mysql_fetch_array($result))
 {
  echo '<tr><td><a href="http://'.$_SERVER['HTTP_HOST'].'/page.php? id='.$affiche['id'].'">'.$affiche['titre'].'</a></td>   <td><a href="modifier-article.php?id='.$affiche['id'].'"><img src="images/modifier.png" alt="Modifier"/></a></td>   <td><a href="supprimer-article.php?id='.$affiche['id'].'"><img src="images/supprimer. png" alt="Supprimer"/></a></td></tr>';
 } 
echo '</tbody></table>';
//On ferme else
 }
?>

<a href="ajouter-page.php"> Ajouter un article</a>
<a href="admin.php"> Retour à l\'administration.</a>

</div>    
</div>   
</body>   
</html>