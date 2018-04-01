<?php session_start();

// on se connecte à la base de données
					include('../connect.php');
					
					mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
					mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
				
 ?>   
 
 
	<html>
    <head>
    <title>Formulaire d'identification</title>
    </head>

    <body>
    <form action="login.php" method="post">
    Votre login : <input type="text" name="login">
    <br />
    Votre mot de passe : <input type="password" name="pwd"><br />
    <input type="submit" value="Connexion">
    </form>

    </body>
    </html>