<!DOCTYPE html>
<html lang="fr">
	

	
	<head> 
		<meta charset="utf-8" />
		<title> Kaméléon Prod </title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="icon" type="image/png" href="favico.png" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
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
		 
	<body  id="fondmultimedia" style="background-image:url(images/imagefond/fondaudiovisuel3.jpg);
	-webkit-background-size: cover; /* pour Chrome et Safari */
  -moz-background-size: cover; /* pour Firefox */
  -o-background-size: cover; /* pour Opera */
  background-size: cover; /* version standardisée */" >
	
	
	
		
		<div id="container">	
			
			
			<div id="content">
			
			<nav id="nav_bottom">
				<ul>
					<li><a href="index.php"><img alt="lienimageAccueil" src="images/imagemenu/menu-1.png" id="lienimageAccueil" /><h3>Accueil</h3></a></li>
					<li><a href="audiovisuel.php"><img alt="lienimageAudiovisuel" src="images/imagemenu/menu-2.png" id="lienimageAudiovisuel" /><h3>Audiovisuel</h3></a></li>
					<li><a href="multimedia.php"><img alt="lienimageMultimédia" src="images/imagemenu/menu-3.png" id="lienimageMultimedia" style="-webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1);" /><h3 style="color : #f54d53;">Multimédia</h3></a></li>
					<li><a href="documentaire.php"><img alt="lienimageDocumentaire" src="images/imagemenu/menu-4.png" id="lienimageDocumentaire" /><h3>Documentaire</h3></a></li>
					<li><a href="references.php"><img alt="lienimageRéférences" src="images/imagemenu/menu-5.png" id="lienimageReferences" /><h3>Références</h3></a></li>
					<li><a href="contact.php"><img alt="lienimageContact" src="images/imagemenu/menu-6.png" id="lienimageContact" /><h3>Contact</h3></a></li>
				</ul>
			</nav>
			
			
			<section>
				<div id="content_multimedia">
				<div id="content_padding">
				
					<?php
								//On se connecte à la base de données
								include('connect.php');
								 
								mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
								mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
								 
								//On selectionne les 5 dernières entrées
								$result1 = mysql_query("SELECT * FROM CONTENU WHERE id='11'");
								 
								while($affiche = mysql_fetch_array($result1))
								 {
								  echo '<div class="cadre">
								
								  
								  <p>'.$affiche
								  ['texte'].'</p>
								  
								  </div>';
								 }
					?>
					
					<!-- <h2> Visite virtuelle </h2>
					<em> « Un outil ludique et complet pour la visite de vos locaux. » </em>
					<p> Les consommateurs sont de plus en plus vigilants et informés. La visite virtuelle est l'outil idéal pour rassurer et  déclencher l'acte d'achat, elle permet à chacun de ce projeter dans l'univers qu'il convoite.
						Destinée aux hôtels, agence de voyage et touristique  mais aussi à toute les structures désireuses de faire découvrir leur univers avec précision.
					</p>
					<p>
						Les industriels envieux de faire découvrir leur process de fabrication avec toute l'inventivité et l'efficacité qui les caractérisent, profiter de cet outil et ouvrez les portes de votre entreprise de manière ludique et originale.

					</p>
					<em>Nos clients : restaurateurs, hôteliers, offices de tourisme, CRT, CDT, gîtes ruraux, camping, parcs d'attractions,...</em> -->
					
					
										<style>
								h1{
									text-align: center;
								}
								#modalCheck{
									display: none;
								}
								.modalLayer{
									display: none;
									position: fixed;
									top: 0;
									bottom: 0;
									left: 0;
									right: 0;
									background-color: rgba(0, 0, 0, 0.5);
								}
								#modalCheck:checked + .modalLayer, #modalContent:target{
									display: block;
								}
								.popup_block{
									background: #fff;
									padding: 20px;
									border: 20px solid #ddd;
									position: relative;
									margin: 10% auto;
									width: 40%;
									box-shadow: 0px 0px 20px #000;
									border-radius: 10px;
								}
								img.btn_close {
									float: right;
									margin: -55px -55px 0 0;
									cursor: pointer;
								}
								.button{
									cursor: pointer;
									color: blue;
									text-decoration: underline;
								}
							</style>

							<!--
							<h1>Une Modalbox CSS</h1>
							<h2>Méthode <kbd>:target</kbd></h2>
							<p>Cliquer sur le lien ci-dessous pour voir apparaitre la fenêtre modale #1</p>
							<div>
								<a href="#modalContent">Voir la fenêtre modale</a>
								<div id="modalContent" class="modalLayer">
									<div class="popup_block">
										<a href="#noWhere"><img src="./close_pop.png" class="btn_close" title="Fermer la fenêtre" alt="Fermer"></a>
										<img src="./bomber.gif" alt="Lil bomb dude" style="float: right; margin: 0 0 0 20px;">
										<h2>Popup #1</h2>
									
										<div> 
										 <?php //include('visitesvirtuelles/besancon/besancon-vv.html'); ?>
										</div>
										
									</div>
								</div>
							</div>
							<h2>Méthode <kbd>:checked</kbd></h2>
							<p>Cliquer sur le lien ci-dessous pour voir apparaitre la fenêtre modale #2</p>
							<div>
								<label for="modalCheck" class="button">Voir la fenêtre modale</label>
								<input type="checkbox" id="modalCheck">
								<div class="modalLayer">
									<div class="popup_block">
										<label for="modalCheck"><img src="./close_pop.png" class="btn_close" title="Fermer la fenêtre" alt="Fermer"></label>
										<img src="./bomber.gif" alt="Lil bomb dude" style="float: right; margin: 0 0 0 20px;">
										<h2>Popup #2</h2>
									
										<p>Aliquip transverbero loquor esse ille vulputate exerci veniam fatua eros similis illum valde. Praesent, venio conventio rusticus antehabeo lenis. Melior pertineo feugait, praesent hos rusticus et haero facilisis abluo. </p>
										<p>Veniam tincidunt augue abluo vero, augue nisl melior quidem secundum nobis singularis eum eum.</p>
										
									</div>
								</div>
							</div>
								-->	

				
			</section>

			
			</div>
			</div><!-- #content -->
			


		</div><!-- #container -->
		
		
			<footer style="position: relative">
				<div id="reseausoc"> <a href="https://www.facebook.com/matthieu.antoine.18?fref=ts"><img alt="logofacebook" src="images/icones/facebook.png" id="logofacebook" /></a>
									 <a href="https://twitter.com/KameleonProd"><img alt="logotwitter" src="images/icones/twitter.png" id="logotwitter" /></a></div>
				<div id="mentionslegales"> <p>Graphisme et Développement : <br/>
				Lukas Pacalon | <a href="mailto:lukaspacalon@hotmail.fr">lukaspacalon@hotmail.fr</a> - Mentions légales </p>
				</div>
			</footer>
			

			
	</body>		
</html>
 
 