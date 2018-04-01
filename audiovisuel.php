<!DOCTYPE html>
<html lang="fr">
	

	
	<head> 
		<meta charset="utf-8" />
		<title> Kaméléon Prod </title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="icon" type="image/png" href="favico.png" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="script.js"></script><!--[if lte IE8]> Pour une meilleure visibilité mettez à jour votre navigateur gratuitement
	    <a href="http://windows.microsoft.com/fr-fr/internet-explorer/ie-11-worldwide-languages" target="_blank"> <strong>ICI !</strong> </a>

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
		
	<body  id="fondaudiovisuel" style="background-image:url(images/imagefond/fondaudiovisuel1.jpg);
	-webkit-background-size: cover; /* pour Chrome et Safari */
  -moz-background-size: cover; /* pour Firefox */
  -o-background-size: cover; /* pour Opera */
  background-size: cover; /* version standardisée */">

	
	
	
		
		<div id="container">	
			
			
			<div id="content">
			
			<nav id="nav_bottom">
				<ul>
					<li><a href="index.php"><img alt="lienimageAccueil" src="images/imagemenu/menu-1.png" id="lienimageAccueil" /><h3>Accueil</h3></a></li>
					<li><a href="audiovisuel.php"><img alt="lienimageAudiovisuel" src="images/imagemenu/menu-2.png" id="lienimageAudiovisuel" style="-webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1);" /><h3 style="color : violet;">Audiovisuel</h3></a></li>
					<li><a href="multimedia.php"><img alt="lienimageMultimédia" src="images/imagemenu/menu-3.png" id="lienimageMultimedia" /><h3>Multimédia</h3></a></li>
					<li><a href="documentaire.php"><img alt="lienimageDocumentaire" src="images/imagemenu/menu-4.png" id="lienimageDocumentaire" /><h3>Documentaire</h3></a></li>
					<li><a href="references.php"><img alt="lienimageRéférences" src="images/imagemenu/menu-5.png" id="lienimageReferences" /><h3>Références</h3></a></li>
					<li><a href="contact.php"><img alt="lienimageContact" src="images/imagemenu/menu-6.png" id="lienimageContact" /><h3>Contact</h3></a></li>
				</ul>
			</nav>
			
			
			<section>
				<div id="content_audiovisuel">
				<div id="content_padding">
				
					<?php
								//On se connecte à la base de données
								include('connect.php');
								 
								mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
								mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
								 
								//On selectionne les 5 dernières entrées
								$result1 = mysql_query("SELECT * FROM CONTENU WHERE id='6'");
								 
								while($affiche = mysql_fetch_array($result1))
								 {
								  echo '<div class="cadre">
								  
								  
								  <p>'.$affiche
								  ['texte'].'</p>
								  
								  </div>';
								 }
					?>
				
					<!-- <h2> Film d'entreprise </h2>
					<em> « Mettez en scène la qualité de vos services et des hommes qui y contribuent. Démontrez sans artifice les avantages qui vous caractérisent et les plus-values que vous offrez. » </em>
					<p> Que vous soyez une entreprise, une collectivité ou une association, la communication reste un impératif de développement. 
					Le « film d'entreprise » vous offre la possibilité de faire découvrir de manière simple, dynamique et concrète votre structure à travers 
					vos produits, services, savoir faire et les personnes qui y contribuent. Kaméléon Prod réalise votre vidéo de manière efficace afin de rendre 
					votre discours le plus lisible possible.
					</p>
					<p>
						La réalisation d'une vidéo peut paraître fastidieuse, notre expérience dans le monde de la vidéo vous garantit une bonne qualité de prestation 
						de la conception à la livraison finale du projet.Profitez aussi de multiples supports de diffusion : sites internet, salons professionnels, 
						réseaux sociaux, télévision, cinéma et optimisez votre investissement.
					</p>
					<em>Nos clients : PME, grandes entreprises, commerçants, artisans, associations... </em> -->
				
				</div>				
				</div>
			</section>
			
			</div><!-- #content -->
			

		</div><!-- #container -->
		
		
			<footer>
				<div id="reseausoc"> <a href="https://www.facebook.com/matthieu.antoine.18?fref=ts"><img alt="logofacebook" src="images/icones/facebook.png" id="logofacebook" /></a>
									 <a href="https://twitter.com/KameleonProd"><img alt="logotwitter" src="images/icones/twitter.png" id="logotwitter" /></a></div>
				<div id="mentionslegales"> <p>Graphisme et Développement : <br/>
				Lukas Pacalon | <a href="mailto:lukaspacalon@hotmail.fr">lukaspacalon@hotmail.fr</a> - Mentions légales </p>
				</div>
			</footer>
	</body>		
</html>
 
 