<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="UTF-8" />

<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=kameleongweb', 'root', 'root', $pdo_options);
    
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


$nom_du_serveur ="localhost";
$nom_de_la_base ="kameleongweb";
$nom_utilisateur ="root";
$passe ="root";
?>

