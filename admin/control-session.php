    <?php
    session_start(); // ici on continue la session
	// on se connecte à la base de données
					include('../connect.php');
					
					mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
					mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
		
	
    if ((!isset($_SESSION['login'])) || ($_SESSION['login'] == ''))
    {
    // La variable $_SESSION['login'] n'existe pas, ou bien elle est vide
    // <=> la personne ne s'est PAS connectée
    echo '<p>Vous devez vous <a href="index.php">connecter</a>.</p>'."\n";
    exit();
    }
    ?>