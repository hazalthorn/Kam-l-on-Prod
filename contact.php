<!DOCTYPE html>
<html lang="fr">
	

	
	<head> 
		<meta charset="utf-8" />
		<title> Kaméléon Prod </title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="icon" type="image/png" href="favico.png" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
		
	<body id="fondcontact" style="background-image:url(images/imagefond/fondcont.jpg);
	-webkit-background-size: cover; /* pour Chrome et Safari */
  -moz-background-size: cover; /* pour Firefox */
  -o-background-size: cover; /* pour Opera */
  background-size: cover; /* version standardisée */" >

	
		
		<div id="container">	
			
			
			<div id="content">
			
			<nav id="nav_bottom">
				<ul >
					<li><a href="index.php"><img alt="lienimageAccueil" src="images/imagemenu/menu-1.png" id="lienimageAccueil" /><h3>Accueil</h3></a></li>
					<li><a href="audiovisuel.php"><img alt="lienimageAudiovisuel" src="images/imagemenu/menu-2.png" id="lienimageAudiovisuel" /><h3>Audiovisuel</h3></a></li>
					<li><a href="multimedia.php"><img alt="lienimageMultimédia" src="images/imagemenu/menu-3.png" id="lienimageMultimedia" /><h3>Multimédia</h3></a></li>
					<li><a href="documentaire.php"><img alt="lienimageDocumentaire" src="images/imagemenu/menu-4.png" id="lienimageDocumentaire" /><h3>Documentaire</h3></a></li>
					<li><a href="references.php"><img alt="lienimageRéférences" src="images/imagemenu/menu-5.png" id="lienimageReferences" /><h3>Références</h3></a></li>
					<li><a href="contact.php"><img alt="lienimageContact" src="images/imagemenu/menu-6.png" id="lienimageContact" style="-webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1);" /><h3 style="color : #25aae1;">Contact</h3></a></li>
				</ul>
			</nav>
			
			
			<section>
				<div id="content_contact">
				<div id="content_padding">
					
						<div id="contactkameleon">
						<h2> Kameleon Prod SARL </h2>
						Adresse: <br/>
						29 boulevard Kennedy <br/>
						25000 Besançon <br/>
						E-mail: 	infos@kameleonprod.fr	<br/>
						Téléphone: 	09.50.03.04.72 <br/>
						Tél. mobile: 	06.19.20.57.26 <br/> <br/>
						
					
						<form action="analyseFormulaire.php" method="POST">
							<p class="formulaire"> </br>					
							<label for="nom">Nom :</label> <input type="text" name="nom" id="premierinput"></br>
							<label for="prenom">Email :</label> <input type="text" name="email" id="deuxiemeinput"></br>
							<label for="email">Objet :</label> <input type="text" name="objet" id="troisiemeinput"></br></br>			
							<label for="message">Votre message :</label> <textarea name="message" id="textareaput"></textarea>
							</br></br>
							<input type="submit" value="Envoyer" class="submit">
<!--  <input type="button" value="Annuler" class="button"> Commentaire -->
							</p>
						</form>
						</div>	
						
						<!--<form action="analyseFormulaire.php" method="POST">
							<p class="formulaire"> </br>					
							<label for="nom">Nom :</label> <input type="text" name="nom" id="premierinput"></br>
							<label for="prenom">Email :</label> <input type="text" name="email" id="deuxiemeinput"></br>
							<label for="email">Objet :</label> <input type="text" name="objet" id="troisiemeinput"></br></br>			
							<label for="message">Votre message :</label> <textarea name="message" id="textareaput"></textarea>
							</br></br>
							<input type="submit" value="Envoyer" class="submit">
  <input type="button" value="Annuler" class="button"> 
							</p>
						</form>
							Commentaire 
												 <form method="post" action="<?php /* echo strip_tags($_SERVER['REQUEST_URI']); */ ?>">
										Votre nom : <input type="text" name="nom" style="margin-left: 28px; padding-right: 22px;" /><br/>
										Votre email : <input type="text" name="email" style="margin-left: 22px; padding-right: 22px;" /><br/>
										<label for="objet">Objet :</label> <input type="text" name="objet" id="troisiemeinput" style="padding-right: 22px;"></br>
										<p>Votre message : <br/>
										<textarea name="message" cols="30" rows="5"></textarea> <br/>
										Combien font 1+3 : <input type="text" name="captcha" size="2" /> <br/>
										<input type="submit" name="submit" value="Envoyer" class="submit" /></p>
										</form>

																  <?php
																  
										/*if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['objet']) || empty($_POST['message'])) {
										echo '<p class="erreur">Attention, vous devez remplir tous les champs</p> ';
										} else {
											// La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne  
											$verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';  					  
																  
											// S'il y des données de postées
											if ($_SERVER['REQUEST_METHOD']=='POST') {
											 
											// (1) Code PHP pour traiter l'envoi de l'email
											 
											// Récupération des variables et sécurisation des données
											$nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
											$email = htmlentities($_POST['email']);
											$objet = htmlentities($_POST['objet']);
											$message = htmlentities($_POST['message']);
											 
											// Variables concernant l'email
											 
											$destinataire = 'lukaspacalon@hotmail.fr'; // Adresse email du webmaster (à personnaliser)
											$sujet = 'Titre du message'; // Titre de l'email
											$contenu = '<html><head><title>Titre du message</title></head><body>';
											$contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
											$contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
											$contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
											$contenu .= '<p><strong>Objet</strong>: '.$objet.'</p>';
											$contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
											$contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
											 
											// Pour envoyer un email HTML, l'en-tête Content-type doit être défini
											$headers = 'MIME-Version: 1.0'."\r\n";
											$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
											 
											// Envoyer l'email
											mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
											echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
											// (2) Fin du code pour traiter l'envoi de l'email
											}
											
										}
											?>
											
											<?php
													if (!isset($_POST['captcha'])) {
													$nombreErreur++;
													$erreur6 = '';
													//<p>Il y a un problème avec la variable "captcha".</p>
													} else {
													if ($_POST['captcha']!=4) {
													// Vérifier que le résultat de l'équation est égal à 4
													$nombreErreur++;
													$erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
													}
													}
													?>
													
													    <?php
															if (isset($erreur6))
															echo '<p>'.$erreur6.'</p>';
															if (isset($erreur7))
															echo '<p>'.$erreur7.'</p>';
															*/?> 
											
											   
																 
							-->		
						</div>
   
						
						<div id="mapkameleon">
						<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?source=s_q&amp;f=q&amp;hl=fr&amp;geocode=&amp;q=Kameleon+Prod,+Boulevard+Pr%C3%A9sident+John+Fitzgerald+Kennedy,+Besan%C3%A7on&amp;aq=0&amp;oq=kameleon+prod&amp;sll=45.317723,5.43724&amp;sspn=6.936982,14.27124&amp;ie=UTF8&amp;hq=Kameleon+Prod,&amp;hnear=Boulevard+Pr%C3%A9sident+John+Fitzgerald+Kennedy,+25000+Besan%C3%A7on&amp;t=m&amp;ll=47.236114,5.98624&amp;spn=0.003642,0.00912&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?source=embed&amp;f=q&amp;hl=fr&amp;geocode=&amp;q=Kameleon+Prod,+Boulevard+Pr%C3%A9sident+John+Fitzgerald+Kennedy,+Besan%C3%A7on&amp;aq=0&amp;oq=kameleon+prod&amp;sll=45.317723,5.43724&amp;sspn=6.936982,14.27124&amp;ie=UTF8&amp;hq=Kameleon+Prod,&amp;hnear=Boulevard+Pr%C3%A9sident+John+Fitzgerald+Kennedy,+25000+Besan%C3%A7on&amp;t=m&amp;ll=47.236114,5.98624&amp;spn=0.003642,0.00912" style="color:#0000FF;text-align:left" target="_blank">Agrandir le plan</a></small>
						</div>	
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
 
