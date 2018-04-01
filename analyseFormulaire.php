<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<link rel="stylesheet" media="screen" type="text/css" title="design" href="style.css" />
<link rel="icon" type="image/png" href="favico.png" />
<body style="background-image:url(images/imagefond/photodefondaudiovisuel50.jpg);">
<script src="script.js"></script><!--[if lte IE8]> Pour une meilleure visibilité mettez à jour votre navigateur gratuitement
	    <a href="http://windows.microsoft.com/fr-fr/internet-explorer/ie-11-worldwide-languages" target="_blank"> <strong>ICI !</strong> </a>

		 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		 <!--[if lte IE 7]>
		 <script src="js/IE8.js" type="text/javascript"></script><![endif]-->

<?php





include_once ("connect.php");
// La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne  
$verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';  
//quelques remplacements pour les specialchars  
    $messageE=preg_replace('#(<|>)#', '-', $_POST['message']);  
    $messageE=str_replace('"', "'",$messageE);  
    $messageE=str_replace('&', 'et',$messageE);  
    $objet=preg_replace('#(<|>)#', '-', $_POST['objet']);  
    $objet=str_replace('"', "'",$objet);  
    $objet=str_replace('&', 'et',$objet);  
// On assigne et/ou protège nos variables  
$votremail=stripslashes(htmlentities($_POST['email']));
$message=stripslashes(htmlspecialchars($messageE));  
$objet=stripslashes(htmlspecialchars($objet)); 
$nom=stripslashes(htmlspecialchars($_POST['nom'])); 
//on enlève les espaces  
    $votremail=trim($votremail);  
    $messageE=trim($messageE);  
    $objet=trim($objet);


	if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['objet']) || empty($_POST['message'])) {
	echo '<p class="erreur">Attention, vous devez remplir tous les champs</p> ';
	} else {
				
				if(!preg_match($verif,$votremail))  
					echo'<p class="erreur">Votre adresse e-mail n\'est pas valide.</p> ';  
					else  
					 {
				
					$domaine=preg_replace('#[^@]+@(.+)#','$1',$votremail);  
					$DomaineMailExiste=checkdnsrr($domaine,'MX');  
					if(!$DomaineMailExiste)  {
					 echo'<p class="erreur">Le nom de domaine de l\'adresse e-mail que vous avez donné n\'existe pas.</p>';
						
				} else {
					 
					 // connexion à la base
					 require_once("connect.php");

					 // on écrit la requête sql
					 $sql = "INSERT INTO `kameleongweb`.`contactmsg` (`id`, `nom`, `email`, `objet`, `message`) VALUES ('$id', '$nom', '$votremail', '$objet', '$messageE');";

					 // on insère les informations du formulaire dans la table
					 try {
						 $bdd->query($sql);
					 } catch (Exception $e) {
						 echo '<p class="erreur">', $e->getMessage(), '</p>';
					 }
					 // on affiche le résultat pour le visiteur
					 echo '<span class="bien">Votre message à bien été envoyé !</span>';
						
						
						
						
				
						$mail = 'infos@kameleonprod.fr'; // Déclaration de l'adresse de destination.
						if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
						{
							$passage_ligne = "\r\n";
						}
						else
						{
							$passage_ligne = "\n";
						}
						//=====Déclaration des messages au format texte et au format HTML.
						$message_txt = $messageE;
						$message_html ='<html><head></head><body><b>Message</b>, .'.$messageE.'. .</body></html>';
						
						
						
						//=====Création de la boundary.
						$boundary = "-----=".md5(rand());
						$boundary_alt = "-----=".md5(rand());
						//==========
						 
						//=====Définition du sujet.
						//$sujet = $objet;
						//=========
						 
						//=====Création du header de l'e-mail.
						$header = "From: ".$votremail."".$passage_ligne;
						$header.= "Reply-to: ".$votremail."".$passage_ligne;
						$header.= "MIME-Version: 1.0".$passage_ligne;
						$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
						//==========
						 
						//=====Création du message.
						$message = $passage_ligne."--".$boundary.$passage_ligne;
						$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
						$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
						//=====Ajout du message au format texte.
						$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
						$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
						$message.= $passage_ligne.$message_txt.$passage_ligne;
						//==========
						 
						$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
						 
						//=====Ajout du message au format HTML.
						$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
						$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
						$message.= $passage_ligne.$message_html.$passage_ligne;
						//==========
						
						$sujet = 'Titre du message'; // Titre de l'email
						$message.= '<p> Vous avez un message de votre site web ! </p>';
						$message.= '<p><strong>Nom</strong>: '.$nom.'</p>';
						$message.= '<p><strong>Email</strong>: '.$votremail.'</p>';
						$message.= '<p><strong>Objet</strong>: '.$objet.'</p>';
						$message.= '<p><strong>Message</strong>: '.$message_txt.'</p>';
						$message.= '</body></html>'; // Contenu du message de l'email (en XHTML)
						 
						//=====On ferme la boundary alternative.
						$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
						//==========
						 
						 
						 
						
						 
						
						//=====Envoi de l'e-mail.
						mail($mail,$objet,$message,$header);
						 
						//==========
					
												
												
						
						
						
						
						
						

					}
				}
}
?>
 <a href="contact.php" class="retour"> Retour : page contact </a>
 </body>
</html>



