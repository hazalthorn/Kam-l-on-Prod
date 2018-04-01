<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="fr">
	

	
	<head style="background-color: black"> 
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<title> Kaméléon Prod </title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<!--[if IE 6]> <link rel="stylesheet" href="internet-explorer-6.css" type="text/css" media="screen" /> <![endif]-->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900&text=ABCDEFGHIJKLMNOPQRSTUVWXYZ' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="bower_components/BigVideo/css/bigvideo.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" type="image/png" href="favico.png" />
		<script src="script.js"></script><!--[if lte IE8]> Pour une meilleure visibilité mettez à jour votre navigateur gratuitement
	    <a href="http://windows.microsoft.com/fr-fr/internet-explorer/ie-11-worldwide-languages" target="_blank"> <strong>ICI !</strong> </a>
		Vous pouvez également voir notre ancien site qui comporte moins de script incompatible 
		<a href="http://kameleonprod.fr"> <strong>ICI !</strong> </a>

		 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		 <!--[if lte IE 7]>
		 <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
	</head>
	<div class="main">
		<div id="nav_top" >
				<header>
					<ul>
						<li><a href="index.php"><img alt="logokameleonprod" src="images/logokameleonprod.png" id="logokameleonprod" /></a></li>
						<!--<li><a href="contact.php"><h2>CONTACT</h2></a></li> -->
					</ul>
				</header>
			</div>
		
	<body style="background-color: black;">
	
	
	
		
		<div id="container">	
			
			
			<div id="content">
			
			<nav id="nav_bottom">
				<ul>
					<li><a href="index.php"><img alt="lienimageAccueil" src="images/imagemenu/menu-1.png" id="lienimageAccueil" style="-webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1);" /><h3 style="color: black;">Accueil</h3></a></li>
					<li><a href="audiovisuel.php"><img alt="lienimageAudiovisuel" src="images/imagemenu/menu-2.png" id="lienimageAudiovisuel" /><h3>Audiovisuel</h3></a></li>
					<li><a href="multimedia.php"><img alt="lienimageMultimédia" src="images/imagemenu/menu-3.png" id="lienimageMultimedia" /><h3>Multimédia</h3></a></li>
					<li><a href="documentaire.php"><img alt="lienimageDocumentaire" src="images/imagemenu/menu-4.png" id="lienimageDocumentaire" /><h3>Documentaire</h3></a></li>
					<li><a href="references.php"><img alt="lienimageRéférences" src="images/imagemenu/menu-5.png" id="lienimageReferences" /><h3>Références</h3></a></li>
					<li><a href="contact.php"><img alt="lienimageContact" src="images/imagemenu/menu-6.png" id="lienimageContact" /><h3>Contact</h3></a></li>
				</ul>
			</nav>

			<section>
				<div id="content_intro">
				<div id="content_padding">
					<!--<h2> CONCEPT & PRODUCTION AUDIOVISUELS </h2>
					<p> Vidéo, film et photographie sont devenus les médias inévitables dans un plan de communication. 
						Nous avons conçu une gamme de services adaptés à chacun de vos besoins. Présenter votre activité, 
						votre savoir-faire ou vos produits, mémoriser votre événement, ou documenter vos actions, vos recherches…
					</p>
					<p>
						Nous vous proposons un produit multimédia sur-mesure et dynamique pour valoriser votre entreprise et 
						rentabiliser vos actions de développement. Installés à Besançon (Franche-Comté), 
						nous intervenons en France et dans le monde entier. 
					</p> -->
					
								<?php
								//On se connecte à la base de données
								include('connect.php');
								 
								mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
								mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
								 
								//On selectionne les 5 dernières entrées
								$result1 = mysql_query("SELECT * FROM CONTENU WHERE id='5'");
								 
								while($affiche = mysql_fetch_array($result1))
								 {
								  echo '<div class="cadre">
								  <p>'.$affiche
								  ['texte'].'</p>
								  
								  </div>';
								 }
								?>
								
								
					
					<a href="video.php"><img alt="lecteurteaser" src="images/lecteurteaserwhite.png" id="lecteurteaser" /></a>
					
					
					<a href="video.php"><p> Cliquez ici pour voir notre Teaser ! </p></a> <br/>
					
				</div>	
				</div>
			</section>
			
			
			
			</div><!-- #content -->
			

		</div><!-- #container -->


    	

		<!-- BigVideo Dependencies -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>
    <script src="bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="http://vjs.zencdn.net/4.0/video.js"></script>

    <!-- BigVideo -->
    <script src="bower_components/BigVideo/lib/bigvideo.js"></script>

    <!-- Demo -->
   <script>
	    $(function() {
            var BV = new $.BigVideo({useFlashForFirefox:false});
			BV.init(); 
			BV.show('vids/videofond1.mp4',{ambient:true, preload:true, altSource:'vids/videowebm1.webm'});
	    });
    </script>	
	

		
			<footer>
				<div id="reseausoc"> <a href="https://www.facebook.com/matthieu.antoine.18?fref=ts"><img alt="logofacebook" src="images/icones/facebook.png" id="logofacebook" /></a>
									 <a href="https://twitter.com/KameleonProd"><img alt="logotwitter" src="images/icones/twitter.png" id="logotwitter" /></a></div>
				<div id="mentionslegales"> <p>Graphisme et Développement : <br/>
				Lukas Pacalon | <a href="mailto:lukaspacalon@hotmail.fr">lukaspacalon@hotmail.fr</a> - Mentions légales </p>
				</div>
			</footer>
	
	</body>
	</div>
</html>
 
 