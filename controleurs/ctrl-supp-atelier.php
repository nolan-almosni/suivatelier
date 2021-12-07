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

echo $_POST['numAtelier'];

$requete = $connection->query('DELETE FROM Participation WHERE numeroAtelier =' . $_POST['numAtelier']);

$requete2 = $connection->query('DELETE FROM Atelier WHERE numero =' . $_POST['numAtelier']);

header('Location: ../vues/vue-liste-ateliers.php');

?>