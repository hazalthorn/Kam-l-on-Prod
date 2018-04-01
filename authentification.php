


<?php
 
include_once 'connect.php';
 
if(isset($_POST['login'], $_POST['mdp'])) # Si le formulaire est soumis
{
 if (!empty($_POST['login']) && !empty($_POST['mdp']))
 {
 
 $login = $_POST['login']; # Protection des Injection SQL ect...
 $mdp = sha1($_POST['mdp']);
 
 $login_q = $bdd->prepare("SELECT * FROM users WHERE login = :login AND pass = :mdp AND valid = '1'");
 $login_q->execute(array(
    'login' => $login,
    'mdp' => $mdp
 ));
 
 if($login_q->fetchColumn() > 0) # Si login pass et valid ok
 {
 $user = $login_q->fetch(PDO::FETCH_OBJ);
 
 $token = sha1(uniqid().$user->id.sha1(uniqid()));
 setcookie('token', $token, time()+3600); # Création des cookies
 $user_id = $user->id;
 $setToken_q = $bdd->prepare("UPDATE users SET token = :token, token_date = NOW() WHERE id = :user_id");
 $setToken_q->execute(array(
    'token' => $token,
    'user_id' => $user_id
 ));
 $token = null;
 $_SESSION['login'] = $user->login; # Création des sessions
 
 header('Location: actu.php'); # Redirection
 
 exit();
 }
 else # Sinon
 {
 # Login ou Mot de passe incorrect
 }
 }
}
 
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" media="screen" type="text/css" title="design" href="style.css" />

<head> 
		<meta charset="utf-8" />
		<title> Kaméléon Prod </title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<!--[if IE 6]> <link rel="stylesheet" href="internet-explorer-6.css" type="text/css" media="screen" /> <![endif]-->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="script.js"></script><!--[if lte IE8]>

		 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		 <!--[if lte IE 7]>
		 <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
	</head>
	
	<div id="nav_top">
				<header>
					<ul>
						<li><a href="index.php"><img alt="logokameleonprod" src="images/logokameleonprod.png" id="logokameleonprod" /></a></li>
						<!--<li><a href="contact.php"><h2>CONTACT</h2></a></li> -->
					</ul>
				</header>
			</div>

 <body>
 
		
 
				 <!--[if IE]><div id="fond_ie"><! [endif]-->
				 <nav id="menu_top">
				 <ul>
				 <li><a href="#">Actualités</a></li>
				 <li><a href="#">Pages</a></li>
				 <li><a id="deco" href="logout.php">Se déconnecter</a></li>
				 </ul>
				 </nav>
				 <div></div>
				 
				 <div>
				 
				 
				 
				 <section id="connexion">
				 <form method="post" action="connexion.php">
				 <label for="id">Identifiant</label>
				 <input id="login" name="login" type="text" required /> <!-- Remplir ce champ est requis -->
				 <br/>
				 <label for="mdp">Mot de passe</label>
				 <input id="mdp" name="mdp" type="password" required /> <!-- Remplir ce champ est requis -->
				 <a href="#" id="pwd_oubli" >Mot de passe oublié ?</a>
				 <input type="submit" value="Connexion">
				 </form>
				 </section>
				 
				 <div></div>
				 
				 <footer>
								<div id="reseausoc"> <a href="https://www.facebook.com/matthieu.antoine.18?fref=ts"><img alt="logofacebook" src="images/icones/facebook.png" id="logofacebook" /></a>
													 <a href="https://twitter.com/KameleonProd"><img alt="logotwitter" src="images/icones/twitter.png" id="logotwitter" /></a></div>
								<div id="mentionslegales"> <p>Graphisme et Développement : <br/>
								Lukas Pacalon | <a href="mailto:lukaspacalon@hotmail.fr">lukaspacalon@hotmail.fr</a> - Mentions légales </p>
								</div>
							</footer>
				 
				 </div>
				 <!--[if lte IE 8]></div> <! [endif]-->
				
 </body>
</html>
 <a href="index.php" class="retour"> Retour : index </a>
</html>



