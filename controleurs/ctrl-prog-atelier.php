<?php

session_start();

try {
  $dbName = 'sbateliers';
  $host = 'localhost';
  $utilisateur = 'sanayabio';
  $motDePasse = 'sb2021';
  $port='3306';
  $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
  $connection = new PDO( $dns, $utilisateur, $motDePasse );

} catch ( Exception $e ) {
	echo 'probleme de connexion' ;
	die(); 
}

$requete = $connection->query('SELECT numero FROM Atelier ORDER BY numero DESC limit 1');
$numDerAtelier = $requete->fetch();
$numAtelier = $numDerAtelier[0] + 1;

$connection->query("INSERT INTO Atelier values(". $numAtelier . ", " . $_SESSION['numResponsableAteliers'] . ", '" . $_POST['dateEnregistrement'] . "', '" 
  . $_POST['dateHeureProgramme'] . "', '" . $_POST['duree'] . "', " . $_POST['nbPlace']  . ", '" . $_POST['theme'] . "')");

header('Location: ../vues/vue-liste-ateliers.php');

?>