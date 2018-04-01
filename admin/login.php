    <?php session_start (); ?>
	<?php
	include('../connect.php');
					
					mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
					mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
				
    // On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
    $login_valide = "admin";
    $pwd_valide = "carottekiwi25";

    // on teste si nos variables sont définies
    if (isset($_POST['login']) && isset($_POST['pwd'])) {

    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
    // dans ce cas, tout est ok, on peut démarrer notre session

   
    // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pwd'] = $_POST['pwd'];

    // on redirige notre visiteur vers une page de notre section membre
    echo ' <a href="admin.php"> administration <a>';
    }
    else {
    // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
    echo '<body onLoad="alert(\'Membre non reconnu...\')">';
    // puis on le redirige vers la page d'accueil
    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
    }
    else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
    }
    ?>