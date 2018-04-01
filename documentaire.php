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
		
	<body id="fonddocumentaire" style="background-image:url(images/imagefond/fonddocu1.jpg);
	-webkit-background-size: cover; /* pour Chrome et Safari */
  -moz-background-size: cover; /* pour Firefox */
  -o-background-size: cover; /* pour Opera */
  background-size: cover; /* version standardisée */">
	
	
	
		
		<div id="container">	
			
			
			<div id="content">
			
			<nav id="nav_bottom">
				<ul>
					<li><a href="index.php"><img alt="lienimageAccueil" src="images/imagemenu/menu-1.png" id="lienimageAccueil" /><h3>Accueil</h3></a></li>
					<li><a href="audiovisuel.php"><img alt="lienimageAudiovisuel" src="images/imagemenu/menu-2.png" id="lienimageAudiovisuel"  /><h3>Audiovisuel</h3></a></li>
					<li><a href="multimedia.php"><img alt="lienimageMultimédia" src="images/imagemenu/menu-3.png" id="lienimageMultimedia" /><h3>Multimédia</h3></a></li>
					<li><a href="documentaire.php"><img alt="lienimageDocumentaire" src="images/imagemenu/menu-4.png" id="lienimageDocumentaire" style="-webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1);" /><h3 style="color : #fb8800;">Documentaire</h3></a></li>
					<li><a href="references.php"><img alt="lienimageRéférences" src="images/imagemenu/menu-5.png" id="lienimageReferences" /><h3>Références</h3></a></li>
					<li><a href="contact.php"><img alt="lienimageContact" src="images/imagemenu/menu-6.png" id="lienimageContact" /><h3>Contact</h3></a></li>
				</ul>
			</nav>
			
			
			<section>		
				<div id="content_documentaire">
				<div id="content_padding">
				
				<?php
								//On se connecte à la base de données
								include('connect.php');
								 
								mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
								mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
								 
								//On selectionne les 5 dernières entrées
								$result1 = mysql_query("SELECT * FROM CONTENU WHERE id_categorie='10'");
								 
								while($affiche = mysql_fetch_array($result1))
								 {
								  echo '<div class="cadre">
								  
								  
								  <p>'.$affiche
								  ['texte'].'</p>
								  
								  </div>';
								 }
					?>
					
					<!--<div id="negebo" class="docuclass">
					<h2> NEGE BO, Forgerons du Mali </h2>
					<em> Réalisation Benoît BIZARD -  En développement – 52 minutes – AVC Intra – en recherche d'un diffuseur </em>
					
					
					<h3>Synopsis : </h3>
					<img alt="fer-rouge" src="images/imagedocumentaire/fer-rouge.jpg" id="imageferrouge" />
					<p> République démocratique du Mali, aujourdʼhui. Dans
							ce pays qui se transforme à forgeron mali document
							aire Nege Bo audiovisuel besancon toute vitesse, sa
							ns cesse traversé de nouvelles tendances sociales, 
							de multiples réalités sont palpables. Au cœur de cet
							te société en pleine ébullition, la caste des forgerons
							 est particulièrement remarquable. Très peu connue, dʼun 
							 rang social nettement inférieur à celui des nobles, elle 
							 joue cependant un rôle dʼintermédiaire exceptionnel entre des hommes. 
							 Sa place discrète, peu enviable mais indispensable dans la société fait 
							 dʼelle un révélateur probant pour mieux saisir lʼévolution des choses.
							 Dès lʼorigine, le forgeron mandingue est fort dʼun ancrage mythique sans équivalent : 
							dans le Mythe de création du Monde bambara, il apparaît comme le premier être humain arrivé sur Terre. 
							Dans la société traditionnelle, encore visible ça et là au Mali, ce maître du savoir et du savoir-faire 
							est resté un personnage ambivalent, à la fois respecté et craint. Seul artisan du feu, du métal, du bois 
							et de l’argile, il est également interlocuteur des forces occultes, gardien des rites, circonciseur, 
							régleur de conflits, intercesseur matrimonial, médiateur..

					</p>
					
					<h3> Mais que veut dire être forgeron en 2011 ?</h3>
					<img alt="imagetikenjahfakoly" src="images/imagedocumentaire/tiken-jah-fakoly.jpg" id="imagetikenjahfakoly" />
					<p>
						
						Nous embarquons pour un voyage très actuel dans le monde de la forge, aux côtés d’une famille et de trois personnages hauts en couleurs -tous de la caste- qui vivent la tradition chacun à leur manière. Le vieux Guimba, maître extracteur de fer au regard malicieux, nous convie à l’une des dernières réductions de minerai de fer du pays, dont il est seul à connaître les secrets. Le charismatique Tiken Jah Fakoly, qui a quitté son rôle d’homme de caste pour devenir chanteur, n’oublie pas pour autant la tradition et retourne sur les traces historiques de son ancêtre Fakoly, avec un regard empreint de sagesse.
						Au sein de la famille Fané, nous suivons Alima, la pétillante potière, qui perpétue le savoir-faire de ses aïeules dans ses travaux d’argile, mais qui se demande si sa fille Mariama va la suivre. Elle, tout juste bachelière, préfèrerait continuer les études à la capitale pour trouver un meilleur travail. Son père Adaman est le chef des forgerons du village, et il a troqué son rôle d’artisan contre celui de médiateur social.
						Quand à Yaya, le sculpteur de masques, il a apporté une certaine innovation dans l’art du bois, et se tourne résolument vers l’avenir du haut de ses soixante ans...
						Notre caméra est envisagée comme un trait dʼunion, un élément déclencheur dʼinteractions entre « filmeur » et « filmé ». Avec la parole de ces intervenants comme clé de voûte du documentaire, nous levons le voile sur un groupe humain méconnu, qui essaye désespérément de resserrer les liens d’une société qui se délite.
					</p>
					</div>
					
					<div id="chroniquepolice" class="docuclass">
				<h2> Chronique d'une police ordinaire  </h2>
					<em> « Chronique d'une police ordinaire ». Réalisation Sylvain CALVES, 2010 / France - 54 minutes – HDV - Diffusion Planète Justice</em> 
					
					
					<h3>Synopsis : </h3>
					<img alt="police" src="images/imagedocumentaire/police2.jpg" id="imgpolice" />
					<p> Le quotidien de cinq policiers d'un commissariat du XIXe arrondissement, un quartier sensible de Paris où la détresse sociale conduit parfois les jeunes à la violence. En immersion, le réalisateur tente de mettre en évidence les barrières qui séparent la rue de l'autorité, deux mondes que tout oppose et au sein desquels évoluent des êtres qui doivent pourtant apprendre à communiquer.

					</p>
					
					<h3> Rôle de Kaméléon Prod : </h3>
					<p> prises de vue, fourniture du matériel de prise de vue et de son. 
					</p>
					</div>
					
					<div id="alamari" class="docuclass">
					<h2> Al Amari « Après la pluie »   </h2>
					<em>  Al Amari « Après la pluie ». Réalisation Sylvain CALVES, 2007 / France - 52 minutes - DV Cam & Mini DV - Diffusion Festival</em> 
					
					
					<h3>Synopsis : </h3>
					<p> Ramallah, capitale de l'autorité palestinienne. Le pays traverse une période de transition, quelques jours après la mort de Yasser Arafat et en attendant la tenue des prochaines élections. Au camp de réfugiés d'Al Amari, situé à la périphérie de Ramallah, les conditions de vie n'ont pas cessé de se dégrader depuis le début de la seconde Intifada : précarité, chômage, infrastructures défectueuses… Seul avec une petite caméra DV, sans traducteur, ce microcosme isolé est d'abord difficile à appréhender. Mais je ne tarde pas à rencontrer Darwish Abu Alish, cinéaste palestinien au chômage qui accepte d'être mon guide.
					</p>
					
					<h3> Rôle de Kaméléon Prod : </h3>
					<p> montage. 
					</p>
					</div> -->
				</div>
				</div>
			</section>
			
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
 
 