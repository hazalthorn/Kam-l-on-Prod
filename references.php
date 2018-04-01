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
		
	<body id="fondreferences" style="background-image:url(images/imagefond/fondref.jpg);
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
					<li><a href="multimedia.php"><img alt="lienimageMultimédia" src="images/imagemenu/menu-3.png" id="lienimageMultimedia" /><h3>Multimédia</h3></a></li>
					<li><a href="documentaire.php"><img alt="lienimageDocumentaire" src="images/imagemenu/menu-4.png" id="lienimageDocumentaire" /><h3>Documentaire</h3></a></li>
					<li><a href="references.php"><img alt="lienimageRéférences" src="images/imagemenu/menu-5.png" id="lienimageReferences" style="-webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1);" /><h3 style="color : #8cc63f;">Références</h3></a></li>
					<li><a href="contact.php"><img alt="lienimageContact" src="images/imagemenu/menu-6.png" id="lienimageContact" /><h3>Contact</h3></a></li>
				</ul>
			</nav>
			
			
			<section>
				<div id="content_references">
				<div id="content_padding">
					<?php
								//On se connecte à la base de données
								include('connect.php');
								 
								mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
								mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
								 
								//On selectionne les 5 dernières entrées
								$result1 = mysql_query("SELECT * FROM CONTENU WHERE id='20'");
								 
								while($affiche = mysql_fetch_array($result1))
								 {
								  echo '<div class="cadre">
								
								  
								  <p>'.$affiche
								  ['texte'].'</p>
								  
								  </div>';
								 }
					?>
				
				<!--<div id="colonnereference1">
						
						<div class="referencediv"> 
						<h2> Nos dernières références </h2>
						<h3>Agence Régional de Santé de Franche Comté</h3>
						<img alt="ars" src="images/imagereferences/ars-franche-comte.jpg" id="ars" class="imgreference" />
						<p><em>Réalisation du bilan 2012 de l'agence sous forme de webdocumentaire.</em></p>
						<p>
						Lieu : Besançon - Doubs - Franche Comté <br/>
						Prestation : tournage – postproduction – création interface crossmédia <br/>
						<!-- Adresse du webdocumentaire : http://www.arsfranchecomte-rapportactivite.fr <br/>  -->
						<!--</p>
						</div>
 
						<div class="referencediv"> 
						<h3>Conseil Général de Côte d'Or</h3>
						<img alt="cg" src="images/imagereferences/conseil-general-cote-or.jpg" id="cg" class="imgreference" />
						<p><em>Réalisation d'une série de films sur la thématique des déchets.</em></p>
						<p>Prestation : tournage – postproduction - création du DVD <br/>
						Lieu : Dijon - Côte d'Or - Bourgogne <br/>
						</p>
						</div>
 
						<div class="referencediv"> 
						<h3>Les Avions du Bonheur</h3>
						<img alt="ab" src="images/imagereferences/avions-bonheur.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'une vidéo de promotion de l'action de la fondation.</em></p>
						<p>Prestation : tournage – postproduction<br/>
						Lieu : Djerba - Tunisie <br/></p>
						</div>

						<div class="referencediv"> 
						<h3>CCI du Doubs</h3>
						<img alt="ab" src="images/imagereferences/cci-doubs.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'une série de quatres portraits d'entreprise dont les clefs de réussite sont les nouveaux marchés.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Besançon - Doubs - Franche Comté <br/>
						</p>
						</div>
						
						<div class="referencediv"> 
						<h3>Les Industries Technologique </h3>
						<img alt="ab" src="images/imagereferences/industries-technologiques-uimm.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d’un film évènementiel sur la semaine de l’industrie</em></p>
						<p>Prestation : tournage – postproduction<br/>
						Lieu : Besançon - Doubs - Franche Comté <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Ville de Besançon </h3>
						<img alt="ab" src="images/imagereferences/logo-besancon-ville-doubs.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film de présentation l'opération "Familles Actives pour le Climat" organisée par la Mairie de Besançon.</em></p>
						<p>Prestation : casting présentateur - tournage – postproduction – création plateau <br/>
						Lieu : Besançon - Doubs - Franche Comté<br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Chambre des Entreprises de l'Emmental et du Comté </h3>
						<img alt="ab" src="images/imagereferences/chambre-entreprises-emmental-comte.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un clip sur le métier de fromager.</em></p>
						<p>Prestation : tournage – postproduction<br/>
						Lieu : Pontarlier - Doubs - Franche Comté<br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Omega TV </h3>
						<img alt="ab" src="images/imagereferences/omega-tv.jpg" id="ab" class="imgreference" />
						<p><em>Tournage pour un film de communication interne pour le groupe Allianz.</em></p>
						<p>Prestation : tournage <br/>
						Lieu : Besançon - Dijon - Auxerre <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Conseil Economique et Social de Franche Comté </h3>
						<img alt="ab" src="images/imagereferences/ceser-franche-comte.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film de présentation CESER (Conseil Economique Social et Environnemental) de Franche Comté.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Besançon - Doubs - Franche Comté <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Ugecam Bourgogne Franche Comté </h3>
						<img alt="ab" src="images/imagereferences/LOGO-UGECAM-bourgogne-franche-comte.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film de présentation de La maison de l'enfant de la Beline, centre de soin pour adolescents obèses.</em></p>
						<p>Prestation : tournage – postproduction – création DVD<br/>
						Lieu : Salins les Bains - Franche Comté - Jura <br/>
						</p>
						</div>
						
						<div class="referencediv"> 
						<h3>Groupe Karavel (Promovacances, Opodo,...) </h3>
						<img alt="ab" src="images/imagereferences/promovac.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation de plus de 200 films touristiques et d'autant de visites virtuelles dans 20 destinations à travers le monde depuis l'automne 2009.</em></p>
						<p>Magazine avec présentateur <br/>
						Lieux : Grèce, Turquie, Tunisie, Egypte, Maroc, Croatie, Maldives, République Dominicaine, Vénézuela, Thaîlande, Majorque,.. <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Les MediAvenue </h3>
						<img alt="ab" src="images/imagereferences/logo-mediavenue-pontarlier.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'une vidéo commerciale de l'écran publicitaire à LED exploité par la société à Pontarlier dans le Doubs. Animation graphique à partir de supports existants.</em></p>
						<p>Prestation : tournage – postproduction  <br/>
						Lieu : Pontarlier – Franche Comté - Haut Doubs<br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>EFS Besançon </h3>
						<img alt="ab" src="images/imagereferences/efs.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un spot publicitaire projeté lors du festival de musique de l'Herbe en Zic.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Besançon - Doubs - Franche Comté <br/></p>
						</div>
						
									
					</div> -->
					
					<!--<div id="colonnereference2"> 
						
						<?php
								//On se connecte à la base de données
								//include('connect.php');
								 
								//mysql_connect("$nom_du_serveur","$nom_utilisateur","$passe");
								//mysql_select_db("$nom_de_la_base") or die('Impossible de s&eacute;lectionner une base de donn&eacute;e. Assurez vous d\'avoir correctement remplit les donn&eacute;es du fichier connexion_bd.php.');
								 
								//On selectionne les 5 dernières entrées
								//$result1 = mysql_query("SELECT * FROM CONTENU WHERE id='21'");
								 
								//while($affiche = mysql_fetch_array($result1))
								// {
								//  echo '<div class="cadre">
								//  <p>'.$affiche
								//  ['texte'].'</p>
								  
								//  </div>';
								// }
					?>
					
						
						<div class="referencediv" style="margin-bottom: -26px; margin-top: 56px;"> 
						<h3>Fromagerie Napiot</h3>
						<img alt="ab" src="images/imagereferences/napiot.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film sur la fabrication du fromage et la valorisation du patrimoine du Haut-Doubs.</em></p>
						<p>Prestation : tournage – postproduction - création du DVD multilingue <br/>
						Lieu : Pontarlier et alentours - Doubs - Franche Comté<br/>
						</p>
						</div>
						
						<div class="referencediv"> 
						<h3>Le Sybert </h3>
						<img alt="ab" src="images/imagereferences/sybert.jpg" id="ab" class="imgreference" />
						<p><em>Conception et réalisation de publicités sur le compostage individuel et collectif et les déchets toxiques pour le SYBERT (Syndicat mixte de Besançon et sa région pour le traitement des déchets).</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Besançon - Doubs - Franche Comté<br/>
						</p>
						</div>
						
						<div class="referencediv"> 
						<h3>CCI Lons le Saunier </h3>
						<img alt="ab" src="images/imagereferences/cci_jura.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film de promotion de l'école de commerce du Jura.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Lons le Saunier - Jura - Franche Comté<br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Société Nipson</h3>
						<img alt="ab" src="images/imagereferences/nipson.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film commercial sur l'imprimante DigiFlex de la société Nipson. Diffusion à l'international.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Belfort - Franche Comté<br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Centre des Jeunes Dirigeants</h3>
						<img alt="ab" src="images/imagereferences/cjd.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation du film de recrutement 2009.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieux : Belfort, Lyon, Perigueux, Nantes, Roanne, Paris,... <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>BGE Franche Comté</h3>
						<img alt="ab" src="images/imagereferences/bge.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film de présentation de la pépinière d'entreprises de Palente à Besançon.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Besançon - Doubs - Franche Comté <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Smac La Rodia </h3>
						<img alt="ab" src="images/imagereferences/rodia.jpg" id="ab" class="imgreference" />
						<p><em>Shooting et montage d'une session acoustique de Mademoiselle K.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : La Rodia - Besançon - Doubs - Franche Comté <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Société Elmere</h3>
						<img alt="ab" src="images/imagereferences/elmere.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation de 3 films sur le concept de fabrication de maisons Elmere. Traduction et doublage du film en 4 langues étrangères.</em></p>
						<p>Prestation : tournage – postproduction - création du DVD multilingue  <br/>
						Lieux : Doubs et Bourgogne <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Xtrem Loue </h3>
						<img alt="ab" src="images/imagereferences/xtrem_loue.jpg" id="ab" class="imgreference" />
						<p><em>Championnat de France de VTT Marathon à Ornans. Réalisation d'un reportage de l'événement.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieu : Ornans - Doubs - Franche Comté <br/></p>
						</div>
						
						<div class="referencediv"> 
						<h3>Incubateur d'entreprises Innovantes</h3>
						<img alt="ab" src="images/imagereferences/incubateur.jpg" id="ab" class="imgreference" />
						<p><em>Série de 12 films de présentations d'entreprises accompagnées par cet organisme.</em></p>
						<p>Prestation : tournage – postproduction <br/>
						Lieux : Besançon, Montbéliard (Doubs) - Lons le Saunier, Dole (Jura) - Belfort <br/>
						</p>
						</div>
						
						<div class="referencediv"> 
						<h3>Requa (Réseau de Qualité des Établissements de Santé de Franche Comté) </h3>
						<img alt="ab" src="images/imagereferences/requa.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un film de formation.</em></p>
						<p>Prestation : tournage – postproduction - création du DVD<br/>
						Lieu : Besançon - Doubs - Franche Comté <br/></p>	
						</div>
						
						<div class="referencediv"> 
						<h3>Festival au Bonheur des Mômes du Grand Bornand (74) </h3>
						<img alt="ab" src="images/imagereferences/bonheur-momes.jpg" id="ab" class="imgreference" />
						<p><em>Réalisation d'un reportage de l'événement.</em></p>
						<p>Prestation : tournage – postproduction – création du DVD<br/>
						Lieu : Le Grand Bornans - Haute Savoie - Rhone Alpes <br/></p>
						</div>
					</div>-->
					
					
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
 
 