<!DOCTYPE >
<html>
<meta charset="UTF-8">
   <head>
       <title>Livre d'or</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 
        <style type="text/css">
        form, .pages
        {
            text-align:center;
        }
        </style>
    </head>
    <body>
    	<form method="post" action="livredor.php">
    		<p> C'est mon site ! Lachez vos com'</p>
    		Pseudo : <input type="text" name="pseudo" /> <br/>
    		Message : <br/>
    		<textarea name="message" rows="8" cols="35"> </textarea><br />
    		<input type="submit" value="Envoyer" />
    		
    		
    		
    	</form>


    	<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=lykan', 'root', '', $pdo_options);
    
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

<?php

	if(isset($_POST['pseudo']) AND isset($_POST['message'])){
		$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
		$message = mysql_real_escape_string(htmlspecialchars($_POST['message']));
		$message = nl2br($message);
		$req = $bdd->prepare("INSERT INTO livreor VALUES('', '" . $pseudo . "', '" . $message . "')");
		$req->execute(array(
	'pseudo' => $pseudo,
	'message' => $message
	));
	}
	

	


// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM livreor');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
   <?php echo '<p><strong>' . $donnees['pseudo'] . '</strong> a écrit :<br />' . $donnees['message'] . '</p>'; ?>
    
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
	
	


</body>
</html>